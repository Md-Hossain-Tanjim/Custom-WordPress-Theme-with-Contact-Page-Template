<footer>
        <p>© <?php echo date('Y'); ?> My Custom Theme</p>
    </footer>
    <script>
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default page reload

    let formData = new FormData(this);

    fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("form-status").style.display = "block";
        document.getElementById("form-status").innerHTML = "<p style='color: green;'>Message sent successfully!</p>";
    })
    .catch(error => {
        document.getElementById("form-status").style.display = "block";
        document.getElementById("form-status").innerHTML = "<p style='color: red;'>Failed to send message. Please try again later.</p>";
    });
});
</script>
    <?php wp_footer(); ?>
</body>
</html>
