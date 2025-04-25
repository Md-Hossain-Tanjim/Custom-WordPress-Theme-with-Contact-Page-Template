<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="contact-form-container">
    <h1>Contact Us</h1>
    <p>Have a question? Send us a message using the form below.</p>

    <form id="contact-form" method="post" action="">
        <label for="name">Name</label>
        <input name="name" type="text" required>

        <label for="email">Email</label>
        <input name="email" type="email" required>

        <label for="message">Message</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>

    <div id="form-status" style="display: none;"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
    
        global $wpdb;
        $table_name = $wpdb->prefix . "contact_messages";
    
        $wpdb->insert($table_name, [
            'name'    => $name,
            'email'   => $email,
            'message' => $message
        ]);
    
    
        // Send email notification
        $to = "you@example.com";
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
        if (wp_mail($to, $subject, $body)) {
            echo "<script>document.getElementById('form-status').innerHTML = '<p style=\"color: green;\">Message sent successfully!</p>';</script>";
        } else {
            echo "<script>document.getElementById('form-status').innerHTML = '<p style=\"color: red;\">Failed to send message. Please try again later.</p>';</script>";
        }
    }
    ?>

</div>

<?php get_footer(); ?>