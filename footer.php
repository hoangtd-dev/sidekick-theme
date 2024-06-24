<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!-- Footer -->
<footer>
  <div class="text-uppercase text-primary-500 footer-logo"><strong>Sidekick</strong></div>

  <div class="footer-contact-information-container">
    <div class="footer-vision-content">
      <p class="text-uppercase footer-title">
        Let's create <br>tomorrow today
      </p>
      <p class="footer-desc">
        Feel free to reach our if you want to <br>collaborate with us, or simply
        have a chat
      </p>
      <!-- <button class="flat-button primary-color text-uppercase mb-16">
        Start a project
      </button> -->
      <button class="flat-button toForm footer-button primary-color text-uppercase" tabindex="0">
        <span>Start a project</span> <i class="fa-solid fa-arrow-right"></i>
      </button>
    </div>

    <div class="footer-contact-information">
      <div>
        <i class="fa-regular fa-envelope mr-8"></i>
        <a class="text-neutral-600" href="mailto:info@sidekick.com">info@sidekick.com</a>
      </div>
      <div>
        <i class="fa-solid fa-phone mr-8"></i>
        <a class="text-neutral-600" href="tel:+84397280997">(+84) 985 816 230</a>
      </div>
      <div>
        <i class="fa-solid fa-location-dot mr-8 text-neutral-600"></i>
        <span>Ho Chi Minh City, Viet Nam</span>
      </div>
    </div>

    <nav class="footer-navigation-menu">
      <a class="text-capitalize text-neutral-600" href="#">About us</a>
      <a class="text-capitalize text-neutral-600" href="#">Services</a>
      <a class="text-capitalize text-neutral-600" href="#">Our works</a>
      <a class="text-capitalize text-neutral-600" href="#">Our team</a>
    </nav>
  </div>

  <div class="footer-mark">
    <div class="footer-privacy text-neutral-200">
      &#169; SideKick 2024. All rights reserved ∙
      <a class="text-neutral-500" href="#">Privacy Policy</a>
    </div>

    <!-- <div class="footer-social-media">
      <button class="stoked-button primary-color icon-btn">
        <i class="fa-brands fa-linkedin-in"></i>
      </button>
    </div> -->

    <div class="footer-back-to-top-btn">
      <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" href="#" class="stoked-button neutral-color text-uppercase">
        <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
      </button>
    </div>
  </div>
</footer>
<!-- End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>