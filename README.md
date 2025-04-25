
# Custom WordPress Theme with Contact Page Template

## Overview
This is a fully **custom WordPress theme** featuring a **dedicated Contact Page template** for efficient user interaction and form submissions. It includes **responsive design**, **database handling**, and **AJAX-powered form processing** to create a seamless experience.

## Features
- **Complete Custom Theme** including `index.php`, `header.php`, `footer.php`, and `functions.php`.
- **Custom Contact Page Template (`page-contact.php`)** with a secure form submission system.
- **Database-driven form handling** using `$wpdb`.
- **AJAX-powered messaging** for smooth user interaction.
- **Automatic Email Notifications** to site administrators.
- **Fully responsive styling (`style.css`)** for mobile adaptability.

## Installation
1. Upload the following files to the `/wp-content/themes/your-theme-name/` directory:
   - `index.php`
   - `header.php`
   - `footer.php`
   - `functions.php`
   - `page-contact.php`
   - `style.css`
2. Activate the theme via the WordPress admin panel.
3. Create a new page and select **Contact Page Template** as the template.
4. Verify that the homepage (`index.php`) and branding (`header.php`) are set up properly.

## Usage
- **Homepage (`index.php`)**: Displays structured content.
- **Header (`header.php`)**: Manages navigation and branding elements.
- **Footer (`footer.php`)**: Adds copyright and AJAX form submission functionality.
- **Contact Page (`page-contact.php`)**: Processes user inquiries via a contact form.
- **Functions (`functions.php`)**: Handles database storage, form validation, and AJAX processing.

## Customization
- Modify **site title and branding** in `header.php`.
- Adjust **homepage content** via `index.php`.
- Extend the **contact form** with new fields in `page-contact.php` and `functions.php`.
- Change **CSS styles** in `style.css` to personalize the design.
- Update **email notification settings** in `functions.php`.

## Troubleshooting
- **Database Issues**: Ensure the contact form table (`contact_messages`) exists.
- **Email Not Sending**: Confirm WordPress email settings.
- **Form Submission Errors**: Debug AJAX responses in `footer.php`.
- **CSS Issues**: Check file paths to ensure styling is properly applied.

---
