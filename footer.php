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
	<footer class="p-20">
			<div class="text-uppercase text-primary-500"><strong>Sidekick</strong></div>

      <div class="footer-contact-information-container">
        <div class="footer-vision-content">
          <p class="text-uppercase text-bold text-header">
            Let's create tomorrow today.
          </p>
          <p class="text-neutral-300 mb-20">
            Feel free to reach our if you want to collaborate with us, or simply
            have a chat.
          </p>
          <button
            class="flat-button primary-color text-uppercase mb-16"
          >
            Start a project
          </button>
        </div>

        <div class="footer-contact-information">
          <div>
            <i class="fa-regular fa-envelope mr-8"></i>
            <a class="text-neutral-600" href="mailto:info@sidekick.com"
              >info@sidekick.com</a
            >
          </div>
          <div>
            <i class="fa-solid fa-phone mr-8"></i>
            <a class="text-neutral-600" href="tel:+84397280997">(+84) 397 280997</a>
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

      <div class="footer-social-media-container">
        <div class="footer-privacy text-neutral-200">
          &#169; SideKick 2024. All rights reserved ∙
          <a class="text-neutral-500" href="#">Privacy Policy</a>
        </div>

        <div class="footer-social-media">
          <button class="stoked-button primary-color icon-btn">
            <i class="fa-brands fa-linkedin-in"></i>
          </button>
        </div>

        <div class="footer-back-to-top-btn">
				<button
            class="stoked-button neutral-color text-uppercase px-16 py-8"
          >
            Back to the top <i class="fa-solid fa-arrow-up pl-4"></i>
          </button>
				</div>
      </div>
    </footer>
    <!-- End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
