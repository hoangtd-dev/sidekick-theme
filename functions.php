<?php

function my_awesome_scripts()
{
    // wp_enqueue_style("style", get_template_directory_uri() . "/assets/main.css", array(), null);
    wp_enqueue_style('rit-style-css', get_stylesheet_directory_uri() . '/assets/main.css', array(), filemtime(get_stylesheet_directory() . '/assets/main.css'));
    wp_enqueue_script("script", get_template_directory_uri() . "/assets/main.min.js", array(), false);
}

add_action("wp_enqueue_scripts", "my_awesome_scripts");

function enqueue_thankYou_page_styles()
{
    if (is_page_template('thank-you.php')) {
        wp_enqueue_style('thankYou-page-style', get_template_directory_uri() . '/assets/main.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_thankYou_page_styles');

// multiple choice select
function enqueue_select2()
{
    // Enqueue Select2 CSS
    wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');

    // Enqueue Select2 JS
    wp_enqueue_script('select2-js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery'), null, true);

    // Custom JS to initialize Select2
    // wp_enqueue_script('custom-select2-init', get_template_directory_uri() . '/js/select2-init.js', array('select2-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_select2');
// end multiple choice select

// form Handling

function handle_form_submission()
{
    // Verify nonce
    if (!isset($_POST['custom_form_nonce_field']) || !wp_verify_nonce($_POST['custom_form_nonce_field'], 'custom_form_nonce')) {
        wp_die('Nonce verification failed');
    }

    // Check if the form is submitted
    if (isset($_POST['action']) && $_POST['action'] === 'handle_form_submission') {

        // Sanitize and validate input data
        $nprefix = sanitize_text_field($_POST['fprefix']);
        $name = sanitize_text_field($_POST['fname']);
        $email = sanitize_email($_POST['femail']);
        $phone = sanitize_text_field($_POST['fphone']);
        $industry = sanitize_text_field($_POST['findustry']);
        $message = sanitize_textarea_field($_POST['fmessage']);
        $service = $_POST['fservice'];

        // Validate email
        if (!is_email($email)) {
            wp_die('Invalid email address');
        }

        $service_string = implode(', ', $service);

        // You can store the data in the database or perform other actions
        global $wpdb;
        $table_name = $wpdb->prefix . 'form_submissions';
        $wpdb->insert($table_name, [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'industry' => $industry,
            'message' => $message,
            'service' => $service_string,
            'submitted_at' => current_time('mysql')
        ]);

        // Send notification email to admin
        $admin_email = 'info@sidekick.vn';
        $subject = "New Form Submission from $name";
        $body = "Name: $nprefix $name\nEmail: $email\nPhone: $phone\nCompany Industry: $industry\nMessage:\n$message\nInterest In: $service_string";
        wp_mail($admin_email, $subject, $body);

        // Send confirmation email to user
        $user_subject = "Thank you for your submission";
        $user_body = "Dear $name,\n\nThank you for your message. We will get back to you shortly.\n\nBest regards,\nSidekick Media";
        wp_mail($email, $user_subject, $user_body);

        // Redirect to a thank you page (change URL as needed)
        wp_redirect(home_url('/'));
        exit();
    }
}
add_action('admin_post_nopriv_handle_form_submission', 'handle_form_submission');
add_action('admin_post_handle_form_submission', 'handle_form_submission');

//end form Handling

// create Form Submission Table

function create_form_submissions_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_submissions';

    // Check if the table already exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            email text NOT NULL,
            phone text NOT NULL,
            industry text Not Null,
            message text NOT NULL,
            service text NOT NULL,
            submitted_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

// Hook into theme setup to create the table
add_action('after_setup_theme', 'create_form_submissions_table');

//end create Form Submission table