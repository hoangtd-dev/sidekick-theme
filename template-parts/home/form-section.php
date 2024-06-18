<form id="form-section" class="form-container" method="post"
    action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <?php wp_nonce_field('custom_form_nonce', 'custom_form_nonce_field'); ?>
    <div class="form-section-wrapper">
        <div class="form-title">
            <h3>Hey! Tell Us All The Things</h3>
        </div>
        <div class="form-info">
            <div class="form-prefix">
                <label for="fprefix" class="field-title">Mr/Mrs/Ms <span style="color: red">*</span></label>
                <input type="text" id="fprefix" name="fprefix" class="field-input">
            </div>
            <div class="form-name">
                <label for="fname" class="field-title">Your Name <span style="color: red">*</span></label>
                <input type="text" id="fname" name="fname" class="field-name">
            </div>
            <div class="form-email">
                <label for="femail" class="field-title">Your Email <span style="color: red">*</span></label>
                <input type="email" id="femail" name="femail" class="field-email">
            </div>
            <div class="form-phone">
                <label for="fphone" class="field-title">Your Phone Number</label>
                <input type="tel" id="fphone" name="fphone" class="field-phone" placeholder="For instant discussion">
            </div>
            <div class="form-industry">
                <label for="findustry" class="field-title">Your Company Industry <span
                        style="color: red">*</span></label>
                <input type="text" id="findustry" name="findustry" class="field-industry"
                    placeholder="Auto/ FMCG/ Real estate/ Banking/ Finance/ Retail/ SME/…)">
            </div>
            <div class="form-message">
                <label for="fmessage" class="field-title">Share With Us Your Project <span
                        style="color: red">*</span></label>
                <textarea id="fmessage" name="fmessage" class="field-message" style="height: 118px"
                    placeholder="Share a detailed overview of your project, including its goals, scope, target audience, timeline, and any specific requirements or challenges. This information helps us understand your needs and tailor our support to ensure your project's success​."></textarea>
            </div>
            <div class="form-service">
                <label for="fservice" class="field-title">Which SIDEKICK Services Are You Interested In?</label>
                <select id="fservice" name="fservice[]" class="field-service" multiple>
                    <option class="text-uppercase" value="media-strategy&management">Media Strategy & Management
                    </option>
                    <option class="text-uppercase" value="branding&communication">Branding & Communication</option>
                    <option class="text-uppercase" value="digital-transformation">Digital Transformation</option>
                    <option class="text-uppercase" value="website&app-development">Website & App Development</option>
                    <option class="text-uppercase" value="marketing-data-analytics">Marketing Data Analytics</option>
                    <option class="text-uppercase" value="custom-solutions">Custom Solutions</option>
                </select>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/down.png" alt="">
            </div>
        </div>
        <input type="hidden" name="action" value="handle_form_submission">
        <div class="form-footer">
            <div class="form-sk-email">Our email <a href="mailto:info@sidekick.vn">info@sidekick.vn</a></div>
            <button type="submit" value="Send Request" class="flat-button form-button primary-color text-uppercase">
                <span>Submit</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</form>