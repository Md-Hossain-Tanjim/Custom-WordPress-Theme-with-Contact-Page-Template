## Custom WordPress Theme with Contact Page Template

## Overview
This WordPress theme is a fully custom-built solution designed to deliver a **visually appealing** and **functional** website with a **dedicated Contact Page template**. It ensures **responsive design**, **dynamic content handling**, and **efficient form submissions**, making it ideal for professional use.

## Features
- **Complete Custom Theme** with structured templates (`index.php`, `header.php`, `footer.php`).
- **Dedicated Contact Page Template (`page-contact.php`)** with a form for user inquiries.
- **Database-Driven Contact Form** storing submissions securely.
- **AJAX-Powered Form Handling** for smooth user experience.
- **Automated Email Notifications** to site administrators.
- **Fully Responsive Styling (`contact-form.css`)** ensuring mobile compatibility.

## Installation
1. Upload the theme files (`index.php`, `header.php`, `footer.php`, `functions.php`, `page-contact.php`, and `contact-form.css`) to your WordPress theme directory.
2. Activate the theme via the WordPress admin panel.
3. Verify that the **Contact Page Template** is available when creating a new page.
4. Set the homepage using `index.php` and customize the header/footer as needed.

## Usage
- **Homepage (`index.php`)**: Displays structured content, welcoming visitors.
- **Header (`header.php`)**: Manages site title, menu navigation.
- **Footer (`footer.php`)**: Displays copyright information and enables AJAX-based contact form submission.
- **Contact Page (`page-contact.php`)**: Handles user messages, storing them in the database and triggering email notifications.
- **Functions (`functions.php`)**: Manages theme initialization, database handling, and AJAX processing.

## Customization
- Modify **site branding** via `header.php`.
- Adjust **homepage content** in `index.php`.
- Expand the **contact form** with additional fields in `page-contact.php` and `functions.php`.
- Personalize **styling and layout** within `contact-form.css`.
- Configure **email settings** in `functions.php` to use a custom recipient.

## Troubleshooting
- **Database Issues**: Ensure the contact form table exists (`contact_messages`).
- **Email Not Sending**: Verify WordPress email settings in `functions.php`.
- **Form Submission Errors**: Debug AJAX responses in `footer.php`.
- **Styling Issues**: Check CSS file paths for correct application.

---

