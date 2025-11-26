<?php
/**
 * The template for displaying the footer
 * Template Name: Footer
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zippyenterprises
 */

$footer_page_id = 186;
?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5">
    <div class="container py-5">
        <div class="row g-5">

            <?php
            // Column 1
            $footer_logo_name              = get_field('footer_logo_name', $footer_page_id);
            $footer_logo_company_desc      = get_field('footer_logo_company_description', $footer_page_id);

            // Column 2
            $footer_get_in_touch           = get_field('footer_get_in_touch', $footer_page_id);
            $footer_company_address        = get_field('footer_company_address', $footer_page_id);
            $footer_company_contact        = get_field('footer_company_contact', $footer_page_id);
            $footer_company_email          = get_field('footer_company_email', $footer_page_id);

            // Column 3
            $footer_popular_link_text      = get_field('footer_popular_link_text', $footer_page_id);

            $footer_about_us_link          = get_field('footer_about_us_link', $footer_page_id);
            $footer_about_us_link_text     = get_field('footer_about_us_link_text', $footer_page_id);

            $footer_contact_us_link        = get_field('footer_contact_us_link', $footer_page_id);
            $footer_contact_us_link_text   = get_field('footer_contact_us_link_text', $footer_page_id);

            $footer_privacy_policy_link    = get_field('footer_privacy_policy_link', $footer_page_id);
            $footer_privacy_policy_text    = get_field('footer_privacy_policy_link_text', $footer_page_id);

            $footer_terms_condition_link   = get_field('footer_terms_condition_link', $footer_page_id);
            $footer_terms_condition_text   = get_field('footer_terms_condition_link_text', $footer_page_id);

            // Column 4
            $footer_our_services_text      = get_field('footer_our_services_text', $footer_page_id);

            $serv1_link = get_field('footer_services_1_link', $footer_page_id);
            $serv1_text = get_field('footer_services_1_link_text', $footer_page_id);

            $serv2_link = get_field('footer_services_2_link', $footer_page_id);
            $serv2_text = get_field('footer_services_2_link_text', $footer_page_id);

            $serv3_link = get_field('footer_services_3_link', $footer_page_id);
            $serv3_text = get_field('footer_services_3_link_text', $footer_page_id);

            $serv4_link = get_field('footer_services_4_link', $footer_page_id);
            $serv4_text = get_field('footer_services_4_link_text', $footer_page_id);

            // Copyright
            $copy_site_url   = get_field('footer_site_name_link_url', $footer_page_id);
            $copy_site_text  = get_field('footer_site_name_link_url_text', $footer_page_id);

            $designed_by_url  = get_field('footer_desgin_by_link_url', $footer_page_id);
            $designed_by_text = get_field('footer_desgin_by_link_url_text', $footer_page_id);
            ?>

            <!-- Column 1 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.1s">
                <a href="#" class="d-inline-block mb-3">
                    <h1 class="text-white">
                        <?= esc_html($footer_logo_name); ?><span class="text-primary">.</span>
                    </h1>
                </a>

                <p class="mb-0"><?= wp_kses_post($footer_logo_company_desc); ?></p>
            </div>

            <!-- Column 2 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.3s">
                <h5 class="text-white mb-4"><?= esc_html($footer_get_in_touch); ?></h5>

                <?php if ($footer_company_address): ?>
                    <p><i class="fa fa-map-marker-alt me-3"></i><?= esc_html($footer_company_address); ?></p>
                <?php endif; ?>

                <?php if ($footer_company_contact): ?>
                    <p><i class="fa fa-phone-alt me-3"></i><?= esc_html($footer_company_contact); ?></p>
                <?php endif; ?>

                <?php if ($footer_company_email): ?>
                    <p><i class="fa fa-envelope me-3"></i><?= esc_html($footer_company_email); ?></p>
                <?php endif; ?>

                <!-- Static social icons -->
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.5s">
                <h5 class="text-white mb-4"><?= esc_html($footer_popular_link_text); ?></h5>

                <a class="btn btn-link" href="<?= esc_url($footer_about_us_link); ?>"><?= esc_html($footer_about_us_link_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($footer_contact_us_link); ?>"><?= esc_html($footer_contact_us_link_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($footer_privacy_policy_link); ?>"><?= esc_html($footer_privacy_policy_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($footer_terms_condition_link); ?>"><?= esc_html($footer_terms_condition_text); ?></a>
            </div>

            <!-- Column 4 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeftBig" data-wow-delay="0.7s">
                <h5 class="text-white mb-4"><?= esc_html($footer_our_services_text); ?></h5>

                <a class="btn btn-link" href="<?= esc_url($serv1_link); ?>"><?= esc_html($serv1_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($serv2_link); ?>"><?= esc_html($serv2_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($serv3_link); ?>"><?= esc_html($serv3_text); ?></a>
                <a class="btn btn-link" href="<?= esc_url($serv4_link); ?>"><?= esc_html($serv4_text); ?></a>
            </div>

        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="container wow fadeIn" data-wow-delay="0.1s">
        <div class="copyright">
            <div class="row">

                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;
                    <a class="border-bottom" href="<?= esc_url($copy_site_url); ?>"><?= esc_html($copy_site_text); ?></a>,
                    All Right Reserved.

                    Designed By
                    <a class="border-bottom" href="<?= esc_url($designed_by_url); ?>"><?= esc_html($designed_by_text); ?></a>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <!-- Static Menu -->
                    <div class="footer-menu">
                        <a href="#">Home</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>

</html>