<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <!-- Navigation Menu Modal -->
    <div id="modal-navigationMenu" class="modal-wrapper hide">
      <div class="modal modal-medium">
        <div class="navMenu-head">
          <span class="navMenu-logo text-uppercase text-primary-500">Sidekick</span>
          <button id="modal-contact-navigationMenu" class="modal-closeBtn primary-color">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <nav class="navMenu-list mt-20">
          <a class="navMenu-item text-uppercase" href="<?php echo esc_url(home_url('/#identity-section')); ?>">About
            us</a>
          <a class="navMenu-item text-uppercase"
            href="<?php echo esc_url(home_url('/#mission-section')); ?>">Services</a>
          <a class="navMenu-item text-uppercase" href="<?php echo esc_url(home_url('/#task-completed-section')); ?>">Our
            works</a>
          <a class="navMenu-item text-uppercase" href="<?php echo esc_url(home_url('/#member-section')); ?>">Our
            team</a>
          <a class="navMenu-item text-uppercase" href="<?php echo esc_url(home_url('/#form-section')); ?>">Contact
            us</a>
        </nav>

        <button class="flat-button toForm navMenu-button primary-color text-uppercase">
          Get in touch
        </button>
        <p class="text-neutral-200 text-center">
          Our Email
          <a class="text-neutral-200" href="mailto:info@sidekick.com">info@sidekick.com</a>
        </p>
      </div>
    </div>
    <!-- End Navigation Menu Modal -->

    <!-- header -->
    <header class="header">
      <div class="text-uppercase text-primary-500 website-name">Sidekick</div>

      <nav class="navigation">
        <a class="text-uppercase text-neutral-600 p-20" href="#identity-section">About us</a>
        <a class="text-uppercase text-neutral-600 p-20" href="#mission-section">Service</a>
        <a class="text-uppercase text-neutral-600 p-20" href="#task-completed-section">Our works</a>
        <a class="text-uppercase text-neutral-600 p-20" href="#member-section">Our team</a>
        <a class="text-uppercase text-neutral-600 p-20" href="#form-section">Contact us</a>
      </nav>

      <nav class="header-nav">
        <button id="header-contactBtn" class="flat-button toForm header-button primary-color text-uppercase">
          <span>Get in touch</span><i class="fa-solid fa-arrow-right"></i>
        </button>
        <button id="header-navigation-menu" class="navMenu-btn">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header/hamburger.png" alt="">
        </button>
      </nav>
    </header>
    <!-- End header -->