<?php
function mycustomtheme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mycustomtheme_setup');

// Ensure database table creation upon theme activation
function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "contact_messages";

    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        message TEXT NOT NULL,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_contact_table');

// AJAX handler for contact form submission
add_action('wp_ajax_contact_form_submit', 'handle_contact_form');
add_action('wp_ajax_nopriv_contact_form_submit', 'handle_contact_form');

function handle_contact_form() {
    global $wpdb;
    $table_name = $wpdb->prefix . "contact_messages";

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Debugging step: Check if required values exist
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required!']);
        wp_die();
    }

    // Debugging step: Check if the table exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        echo json_encode(['status' => 'error', 'message' => 'Database table not found!']);
        wp_die();
    }

    // Insert message into the database
    $insert_result = $wpdb->insert($table_name, [
        'name'    => $name,
        'email'   => $email,
        'message' => $message
    ]);

    // Check for insertion errors
    if (!$insert_result) {
        echo json_encode(['status' => 'error', 'message' => 'Database Error: ' . $wpdb->last_error]);
        wp_die();
    }

    // Send email notification
    $to = "you@example.com"; // Change this to your actual email
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (wp_mail($to, $subject, $body)) {
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email failed to send.']);
    }

    wp_die();
}