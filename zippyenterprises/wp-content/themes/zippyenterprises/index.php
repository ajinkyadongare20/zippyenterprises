<?php

/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zippyenterprises
 */

get_header();
?>

<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header mb-5">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <?php
            $home_banner_tag        = get_field('home_banner_tag_name');
            $home_banner_heading    = get_field('home_banner_heading_name');
            $home_banner_desc       = get_field('home_banner_description_text');
            $home_banner_btn1_url   = get_field('home_banner_read_more_btn');
            $home_banner_btn1_text  = get_field('home_banner_read_more_text');
            $home_banner_btn2_url   = get_field('home_banner_contact_us_btn');
            $home_banner_btn2_text  = get_field('home_banner_contact_us_text');
            $home_banner_image_url  = get_field('home_banner_image');
            ?>

            <!-- Left Content -->
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">

                <?php if ($home_banner_tag): ?>
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated fadeInLeftBig">
                        <?= esc_html($home_banner_tag); ?>
                    </div>
                <?php endif; ?>

                <?php if ($home_banner_heading): ?>
                    <h1 class="display-4 text-white mb-4 animated fadeInLeftBig">
                        <?= esc_html($home_banner_heading); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($home_banner_desc): ?>
                    <div class="text-white mb-4 animated fadeInLeftBig">
                        <?= wp_kses_post($home_banner_desc); ?>
                    </div>
                <?php endif; ?>

                <!-- Read More Button -->
                <?php if ($home_banner_btn1_url && $home_banner_btn1_text): ?>
                    <a href="<?= esc_url($home_banner_btn1_url); ?>"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated fadeInLeftBig">
                        <?= esc_html($home_banner_btn1_text); ?>
                    </a>
                <?php endif; ?>

                <!-- Contact Us Button -->
                <?php if ($home_banner_btn2_url && $home_banner_btn2_text): ?>
                    <a href="<?= esc_url($home_banner_btn2_url); ?>"
                        class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated fadeInLeftBig">
                        <?= esc_html($home_banner_btn2_text); ?>
                    </a>
                <?php endif; ?>

            </div>

            <!-- Right Image -->
            <div class="col-lg-6 align-self-end text-center text-lg-end wow fadeInRightBig">
                <?php if ($home_banner_image_url): ?>
                    <img class="img-fluid" src="<?= esc_url($home_banner_image_url); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <?php
            $home_about_image          = get_field('home_about_image'); // URL
            $home_about_us_tag        = get_field('home_about_us_tag');
            $home_about_us_text_heading = get_field('home_about_us_text_heading');
            $home_about_description    = get_field('home_about_description');
            $home_about_heading_1      = get_field('home_about_heading_1');
            $home_about_heading_2      = get_field('home_about_heading_2');
            $home_about_heading_3      = get_field('home_about_heading_3');
            $home_about_heading_4      = get_field('home_about_heading_4');
            $home_about_read_more_btn       = get_field('home_about_read_more_btn'); // URL
            $home_about_read_more_btn_text  = get_field('home_about_read_more_btn_text');
            ?>

            <!-- Left Image -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <?php if ($home_about_image): ?>
                        <img class="img-fluid" src="<?= esc_url($home_about_image); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                <?php if ($home_about_us_tag): ?>
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                        <?= esc_html($home_about_us_tag); ?>
                    </div>
                <?php endif; ?>

                <?php if ($home_about_us_text_heading): ?>
                    <h1 class="mb-4"><?= esc_html($home_about_us_text_heading); ?></h1>
                <?php endif; ?>

                <?php if ($home_about_description): ?>
                    <p class="mb-4"><?= wp_kses_post($home_about_description); ?></p>
                <?php endif; ?>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <?php if ($home_about_heading_1): ?>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= esc_html($home_about_heading_1); ?></h6>
                        <?php endif; ?>

                        <?php if ($home_about_heading_2): ?>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i><?= esc_html($home_about_heading_2); ?></h6>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-6">
                        <?php if ($home_about_heading_3): ?>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= esc_html($home_about_heading_3); ?></h6>
                        <?php endif; ?>

                        <?php if ($home_about_heading_4): ?>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i><?= esc_html($home_about_heading_4); ?></h6>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="d-flex align-items-center mt-4">

                    <!-- Read More button -->
                    <?php if ($home_about_read_more_btn && $home_about_read_more_btn_text): ?>
                        <a class="btn btn-primary rounded-pill px-4 me-3"
                            href="<?= esc_url($home_about_read_more_btn); ?>">
                            <?= esc_html($home_about_read_more_btn_text); ?>
                        </a>
                    <?php endif; ?>

                    <!-- Social media icons - hardcoded URLs -->
                    <a class="btn btn-outline-primary btn-square me-3" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid bg-light mt-5 py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- Left Section: ACF Dynamic Content -->
            <div class="col-lg-5 wow fadeInLeftBig" data-wow-delay="0.1s">

                <?php
                $home_our_services_tag               = get_field('home_services_tag');
                $home_our_services_heading           = get_field('home_services_text_heading');
                $home_our_services_description       = get_field('home_services_text_description');

                $home_our_services_btn_url           = get_field('home_services_read_more_btn');
                $home_our_services_btn_text          = get_field('home_services_read_more_btn_text');
                ?>

                <?php if ($home_our_services_tag): ?>
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                        <?= esc_html($home_our_services_tag); ?>
                    </div>
                <?php endif; ?>

                <?php if ($home_our_services_heading): ?>
                    <h1 class="mb-4"><?= esc_html($home_our_services_heading); ?></h1>
                <?php endif; ?>

                <?php if ($home_our_services_description): ?>
                    <p class="mb-4"><?= wp_kses_post($home_our_services_description); ?></p>
                <?php endif; ?>

                <?php if ($home_our_services_btn_url && $home_our_services_btn_text): ?>
                    <a class="btn btn-primary rounded-pill px-4"
                        href="<?= esc_url($home_our_services_btn_url); ?>">
                        <?= esc_html($home_our_services_btn_text); ?>
                    </a>
                <?php endif; ?>

            </div>

            <!-- Right Section: CPT Dynamic Loop -->
            <div class="col-lg-7">
                <div class="row g-4">

                    <?php
                    $args = array(
                        'post_type'      => 'home_our_services',
                        'posts_per_page' => 4,
                        'order'          => 'ASC'
                    );

                    $home_our_services_loop = new WP_Query($args);
                    $delay = 0.1;
                    ?>

                    <?php if ($home_our_services_loop->have_posts()): $count = 0; ?>
                        <?php while ($home_our_services_loop->have_posts()): $home_our_services_loop->the_post(); ?>

                            <?php
                            $home_our_services_icon                 = get_field('home_services_icon');
                            $home_our_services_heading_name         = get_field('home_services_haeding_name');
                            $home_our_services_heading_description  = get_field('home_services_haeding_description');
                            $home_our_services_link_btn             = get_field('home_services_link_btn');
                            $home_our_services_link_btn_text        = get_field('home_services_link_btn_text');

                            $delay_value = $delay . 's';
                            $delay += 0.2;
                            ?>

                            <div class="col-md-6 <?= ($count >= 2) ? 'pt-md-4' : ''; ?>">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeInDownBig" data-wow-delay="<?= esc_attr($delay_value); ?>">
                                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">

                                            <?php if ($home_our_services_icon): ?>
                                                <div class="service-icon btn-square">
                                                    <i class="<?= esc_attr($home_our_services_icon); ?> fa-2x"></i>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($home_our_services_heading_name): ?>
                                                <h5 class="mb-3"><?= esc_html($home_our_services_heading_name); ?></h5>
                                            <?php endif; ?>

                                            <?php if ($home_our_services_heading_description): ?>
                                                <p><?= wp_kses_post($home_our_services_heading_description); ?></p>
                                            <?php endif; ?>

                                            <?php if ($home_our_services_link_btn && $home_our_services_link_btn_text): ?>
                                                <a class="btn px-3 mt-auto mx-auto" href="<?= esc_url($home_our_services_link_btn); ?>">
                                                    <?= esc_html($home_our_services_link_btn_text); ?>
                                                </a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php $count++;
                        endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-primary feature pt-5">
    <div class="container pt-5">
        <div class="row g-5">

            <?php
            $home_feature_tag                = get_field('home_feature_tag');
            $home_feature_heading_text       = get_field('home_feature_heading_text');
            $home_feature_description_text   = get_field('home_feature_description_text');
            $home_feature_point_1            = get_field('home_feature_point_1');
            $home_feature_point_2            = get_field('home_feature_point_2');
            $home_feature_point_3            = get_field('home_feature_point_3');
            $home_feature_point_4            = get_field('home_feature_point_4');
            $home_feature_counter_1_icon     = get_field('home_feature_counter_1_icon');
            $home_feature_counter_1_value    = get_field('home_feature_counter_1_value');
            $home_feature_counter_1_tittle   = get_field('home_feature_counter_1_tittle');
            $home_feature_counter_2_icon     = get_field('home_feature_counter_2_icon');
            $home_feature_counter_2_value    = get_field('home_feature_counter_2_value');
            $home_feature_counter_2_tittle   = get_field('home_feature_counter_2_tittle');
            $home_feature_right_image        = get_field('home_feature_right_image'); // image url
            ?>

            <!-- Left Section -->
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeInLeftBig" data-wow-delay="0.3s">

                <?php if ($home_feature_tag): ?>
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">
                        <?= esc_html($home_feature_tag); ?>
                    </div>
                <?php endif; ?>

                <?php if ($home_feature_heading_text): ?>
                    <h1 class="text-white mb-4"><?= esc_html($home_feature_heading_text); ?></h1>
                <?php endif; ?>

                <?php if ($home_feature_description_text): ?>
                    <p class="text-light mb-4"><?= wp_kses_post($home_feature_description_text); ?></p>
                <?php endif; ?>

                <!-- Points -->
                <?php if ($home_feature_point_1): ?>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span><?= esc_html($home_feature_point_1); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($home_feature_point_2): ?>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span><?= esc_html($home_feature_point_2); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($home_feature_point_3): ?>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span><?= esc_html($home_feature_point_3); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($home_feature_point_4): ?>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span><?= esc_html($home_feature_point_4); ?></span>
                    </div>
                <?php endif; ?>

                <!-- Counters -->
                <div class="row g-4 pt-3">

                    <!-- Counter 1 -->
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="<?= esc_attr($home_feature_counter_1_icon); ?> fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">
                                    <?= esc_html($home_feature_counter_1_value); ?>
                                </h2>
                                <p class="text-white mb-0">
                                    <?= esc_html($home_feature_counter_1_tittle); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 2 -->
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="<?= esc_attr($home_feature_counter_2_icon); ?> fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">
                                    <?= esc_html($home_feature_counter_2_value); ?>
                                </h2>
                                <p class="text-white mb-0">
                                    <?= esc_html($home_feature_counter_2_tittle); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 align-self-end text-center text-md-end wow fadeInRightBig" data-wow-delay="0.5s">

                <?php if ($home_feature_right_image): ?>
                    <img class="img-fluid" src="<?= esc_url($home_feature_right_image); ?>" alt="">
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Case Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">

        <?php
        $case_study_heading_tag  = get_field('case_study_heading_tag');
        $case_study_heading_text = get_field('case_study_heading_text');
        ?>

        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">

            <?php if ($case_study_heading_tag): ?>
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                    <?= esc_html($case_study_heading_tag); ?>
                </div>
            <?php endif; ?>

            <?php if ($case_study_heading_text): ?>
                <h1 class="mb-4"><?= esc_html($case_study_heading_text); ?></h1>
            <?php endif; ?>

        </div>

        <div class="row g-4">

            <?php
            $args = array(
                'post_type'      => 'case_study',
                'posts_per_page' => 3,
                'order'          => 'ASC'
            );
            $caseStudies = new WP_Query($args);
            $delay = 0.3;
            ?>

            <?php if ($caseStudies->have_posts()): ?>
                <?php while ($caseStudies->have_posts()): $caseStudies->the_post(); ?>

                    <?php
                    $case_study_image             = get_field('case_study_image');
                    $case_study_page_link         = get_field('case_study_page_link');
                    $case_study_heading_text_item = get_field('case_study_heading_text');
                    $case_study_description_text  = get_field('case_study_description_text');
                    $case_study_icon              = get_field('case_study_icon');

                    $delay_value = $delay . 's';
                    $delay += 0.2;
                    ?>

                    <div class="col-lg-4 wow fadeInLeftBig" data-wow-delay="<?= esc_attr($delay_value); ?>">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">

                            <?php if ($case_study_image): ?>
                                <img class="img-fluid" src="<?= esc_url($case_study_image); ?>" alt="">
                            <?php endif; ?>

                            <a class="case-overlay text-decoration-none" href="<?= esc_url($case_study_page_link); ?>">

                                <?php if ($case_study_heading_text_item): ?>
                                    <small><?= esc_html($case_study_heading_text_item); ?></small>
                                <?php endif; ?>

                                <?php if ($case_study_description_text): ?>
                                    <div class="lh-base text-white mb-3">
                                        <?= wp_kses_post($case_study_description_text); ?>
                                    </div>
                                <?php endif; ?>

                                <span class="btn btn-square btn-primary">
                                    <i class="<?= esc_attr($case_study_icon); ?>"></i>
                                </span>

                            </a>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Case End -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <?php
        $faq_heading      = get_field('faq_heading');
        $faq_heading_text = get_field('faq_heading_text');
        ?>

        <!-- Section Heading -->
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <?php if ($faq_heading): ?>
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                    <?= esc_html($faq_heading); ?>
                </div>
            <?php endif; ?>

            <?php if ($faq_heading_text): ?>
                <h1 class="mb-4"><?= esc_html($faq_heading_text); ?></h1>
            <?php endif; ?>
        </div>

        <?php
        // Fetch all FAQ CPT posts
        $faq_args = array(
            'post_type'      => 'faqs_cpt',   // your single CPT name
            'posts_per_page' => -1,
            'order'          => 'ASC'
        );
        $faqs = new WP_Query($faq_args);

        // Convert FAQs into array for indexing
        $faq_items = $faqs->posts;
        $total     = count($faq_items);

        // First 4 go left, rest go right
        $left_faqs  = array_slice($faq_items, 0, 4);
        $right_faqs = array_slice($faq_items, 4);
        ?>

        <div class="row">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">

                    <?php
                    $i = 1;
                    foreach ($left_faqs as $post):
                        setup_postdata($post);

                        $question = get_field('faqs_question', $post->ID);
                        $answer   = get_field('faqs_answer', $post->ID);

                        $heading_id  = "leftHeading" . $i;
                        $collapse_id = "leftCollapse" . $i;
                        $delay_value = "0." . $i . "s";
                    ?>

                        <div class="accordion-item wow fadeIn" data-wow-delay="<?= $delay_value; ?>">
                            <h2 class="accordion-header" id="<?= $heading_id; ?>">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#<?= $collapse_id; ?>"
                                    aria-expanded="false" aria-controls="<?= $collapse_id; ?>">
                                    <?= esc_html($question); ?>
                                </button>
                            </h2>
                            <div id="<?= $collapse_id; ?>" class="accordion-collapse collapse"
                                aria-labelledby="<?= $heading_id; ?>" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    <?= wp_kses_post($answer); ?>
                                </div>
                            </div>
                        </div>

                    <?php
                        $i++;
                    endforeach;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">

                    <?php
                    $j = 1;
                    foreach ($right_faqs as $post):
                        setup_postdata($post);

                        $question = get_field('faqs_question', $post->ID);
                        $answer   = get_field('faqs_answer', $post->ID);

                        $heading_id  = "rightHeading" . $j;
                        $collapse_id = "rightCollapse" . $j;
                        $delay_value = "0." . ($j + 4) . "s";
                    ?>

                        <div class="accordion-item wow.fadeIn" data-wow-delay="<?= $delay_value; ?>">
                            <h2 class="accordion-header" id="<?= $heading_id; ?>">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#<?= $collapse_id; ?>"
                                    aria-expanded="false" aria-controls="<?= $collapse_id; ?>">
                                    <?= esc_html($question); ?>
                                </button>
                            </h2>
                            <div id="<?= $collapse_id; ?>" class="accordion-collapse collapse"
                                aria-labelledby="<?= $heading_id; ?>" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    <?= wp_kses_post($answer); ?>
                                </div>
                            </div>
                        </div>

                    <?php
                        $j++;
                    endforeach;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- FAQs End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <?php
            // TEAM SECTION FIELDS (NEW VARIABLES)
            $team_sec_tag         = get_field('team_tag_text');
            $team_sec_heading     = get_field('team_main_heading');
            $team_sec_description = get_field('team_heading_description_text');
            $team_sec_btn_link    = get_field('team_read_more_link');
            $team_sec_btn_text    = get_field('team_read_more_text');
            ?>

            <!-- LEFT SECTION -->
            <div class="col-lg-5 wow fadeInLeftBig" data-wow-delay="0.1s">

                <?php if ($team_sec_tag): ?>
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                        <?= esc_html($team_sec_tag); ?>
                    </div>
                <?php endif; ?>

                <?php if ($team_sec_heading): ?>
                    <h1 class="mb-4"><?= esc_html($team_sec_heading); ?></h1>
                <?php endif; ?>

                <?php if ($team_sec_description): ?>
                    <p class="mb-4"><?= wp_kses_post($team_sec_description); ?></p>
                <?php endif; ?>

                <?php if ($team_sec_btn_link && $team_sec_btn_text): ?>
                    <a class="btn btn-primary rounded-pill px-4" href="<?= esc_url($team_sec_btn_link); ?>">
                        <?= esc_html($team_sec_btn_text); ?>
                    </a>
                <?php endif; ?>

            </div>

            <!-- RIGHT TEAM MEMBERS SECTION -->
            <div class="col-lg-7">
                <div class="row g-4">

                    <?php
                    // QUERY TEAM CPT
                    $team_query = new WP_Query([
                        'post_type'      => 'team_cpt',
                        'posts_per_page' => 4,
                        'order'          => 'ASC'
                    ]);

                    $team_posts = $team_query->posts;

                    $left_team  = array_slice($team_posts, 0, 2);
                    $right_team = array_slice($team_posts, 2);

                    $delay = 0.1;
                    ?>

                    <!-- LEFT MEMBERS -->
                    <div class="col-md-6">
                        <div class="row g-4">

                            <?php foreach ($left_team as $post): setup_postdata($post); ?>

                                <?php
                                // NEW VARIABLE NAMES FOR MEMBER
                                $member_img  = get_field('team_member_image', $post->ID);
                                $member_name = get_field('team_member_name', $post->ID);
                                $member_role = get_field('team_member_role', $post->ID);

                                $delay_val = $delay . "s";
                                $delay += 0.4;
                                ?>

                                <div class="col-12 wow fadeInDownBig" data-wow-delay="<?= $delay_val; ?>">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">

                                        <?php if ($member_img): ?>
                                            <img class="img-fluid rounded-circle p-4"
                                                src="<?= esc_url($member_img); ?>" alt="">
                                        <?php endif; ?>

                                        <h5 class="mb-0"><?= esc_html($member_name); ?></h5>
                                        <small><?= esc_html($member_role); ?></small>

                                    </div>
                                </div>

                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>

                    <!-- RIGHT MEMBERS -->
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">

                            <?php foreach ($right_team as $post): setup_postdata($post); ?>

                                <?php
                                $member_img  = get_field('team_member_image', $post->ID);
                                $member_name = get_field('team_member_name', $post->ID);
                                $member_role = get_field('team_member_role', $post->ID);

                                $delay_val = $delay . "s";
                                $delay += 0.4;
                                ?>

                                <div class="col-12 wow fadeInDownBig" data-wow-delay="<?= $delay_val; ?>">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">

                                        <?php if ($member_img): ?>
                                            <img class="img-fluid rounded-circle p-4"
                                                src="<?= esc_url($member_img); ?>" alt="">
                                        <?php endif; ?>

                                        <h5 class="mb-0"><?= esc_html($member_name); ?></h5>
                                        <small><?= esc_html($member_role); ?></small>

                                    </div>
                                </div>

                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">

            <?php
            // PAGE ACF FIELDS (LEFT SIDE)
            $testi_tag_text        = get_field('testimonial_tag_text');
            $testi_heading         = get_field('testimonial_heading');
            $testi_description     = get_field('testimonial_heading_description');
            $testi_btn_link        = get_field('testimonial_read_more_link');
            $testi_btn_text        = get_field('testimonial_read_more_btn_text');
            ?>

            <!-- LEFT STATIC SECTION -->
            <div class="col-lg-5 wow fadeInLeftBig" data-wow-delay="0.1s">

                <?php if ($testi_tag_text): ?>
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                        <?= esc_html($testi_tag_text); ?>
                    </div>
                <?php endif; ?>

                <?php if ($testi_heading): ?>
                    <h1 class="mb-4"><?= esc_html($testi_heading); ?></h1>
                <?php endif; ?>

                <?php if ($testi_description): ?>
                    <p class="mb-4"><?= wp_kses_post($testi_description); ?></p>
                <?php endif; ?>

                <?php if ($testi_btn_link && $testi_btn_text): ?>
                    <a class="btn btn-primary rounded-pill px-4" href="<?= esc_url($testi_btn_link); ?>">
                        <?= esc_html($testi_btn_text); ?>
                    </a>
                <?php endif; ?>

            </div>

            <!-- RIGHT SIDE TESTIMONIAL SLIDER -->
            <div class="col-lg-7 wow fadeInRightBig" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel border-start border-primary">

                    <?php
                    // CPT Query
                    $args = array(
                        'post_type'      => 'testimonials_cpt',
                        'posts_per_page' => -1,
                        'order'          => 'ASC'
                    );

                    $testi_query = new WP_Query($args);

                    if ($testi_query->have_posts()):
                        while ($testi_query->have_posts()): $testi_query->the_post();

                            // CPT ACF FIELDS
                            $client_desc  = get_field('testimonial_client_description');
                            $client_img   = get_field('testimonial_client_image');
                            $client_name  = get_field('testimonial_client_name');
                            $client_role  = get_field('testimonial_client_role');
                    ?>

                            <div class="testimonial-item ps-5">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>

                                <?php if ($client_desc): ?>
                                    <p class="fs-4"><?= wp_kses_post($client_desc); ?></p>
                                <?php endif; ?>

                                <div class="d-flex align-items-center">

                                    <?php if ($client_img): ?>
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="<?= esc_url($client_img); ?>"
                                            style="width: 60px; height: 60px;">
                                    <?php endif; ?>

                                    <div class="ps-3">

                                        <?php if ($client_name): ?>
                                            <h5 class="mb-1"><?= esc_html($client_name); ?></h5>
                                        <?php endif; ?>

                                        <?php if ($client_role): ?>
                                            <span><?= esc_html($client_role); ?></span>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonial End -->



<?php
// get_sidebar();
get_footer();
