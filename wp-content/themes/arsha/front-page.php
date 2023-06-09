<?php get_header() ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1><?php echo get_bloginfo('description') ?></h1>
                <h2><?php echo get_theme_mod('arsha_tagline-subtitle') ?></h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>

                    <?php if (is_active_sidebar('arsha-video')) {
                        dynamic_sidebar('arsha-video');
                    } ?>

                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo get_theme_mod('arsha_hero-image') ?>" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <?php $clients = get_posts([
        'post_type' => 'clients',
        'numberposts' => -1,
    ]);
    // var_dump($clients);
    if (!empty($clients)) : ?>
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <?php foreach ($clients as $client) : ?>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_field('client_image', $client->ID)['url'] ?>" class="img-fluid" alt="<?php echo get_field('client_image', $client->ID)['alt'] ?>">
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section>
    <?php endif; ?>
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        <?php echo get_field('first_block_of_text', 60) ?>
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i><?php echo get_field('first_bullet_point', 60) ?></li>
                        <li><i class="ri-check-double-line"></i><?php echo get_field('second_bullet_point', 60) ?></li>
                        <li><i class="ri-check-double-line"></i><?php echo get_field('third_bullet_point', 60) ?></li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        <?php echo get_field('second_block_of_text', 60) ?>
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <?php echo get_post(73)->post_content ?>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span><?php echo get_field('accordion_01_heading', 73) ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        <?php echo get_field('accordion_01_description', 73) ?>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> <?php echo get_field('accordion_02_heading', 73) ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        <?php echo get_field('accordion_02_description', 73) ?>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> <?php echo get_field('accordion_03_heading', 73) ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        <?php echo get_field('accordion_03_description', 73) ?>
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo get_field('image', 73)['url'] ?>");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?php echo get_field('image', 96)['url'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3><?php echo get_field('heading', 96) ?></h3>
                    <p class="fst-italic">
                        <?php echo get_field('description', 96) ?>
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill"><?php echo get_field('first_skill', 96) ?> <i class="val"><?php echo get_field('first_skill_percentage', 96) ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('first_skill_percentage', 96) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><?php echo get_field('second_skill', 96) ?> <i class="val"><?php echo get_field('second_skill_percentage', 96) ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('second_skill_percentage', 96) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><?php echo get_field('third_skill', 96) ?> <i class="val"><?php echo get_field('third_skill_percentage', 96) ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('third_skill_percentage', 96) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><?php echo get_field('fourth_skill', 96) ?> <i class="val"><?php echo get_field('fourth_skill_percentage', 96) ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('fourth_skill_percentage', 96) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <?php echo get_post(115)->post_content ?>
            </div>

            <?php $serv = get_posts([
                'post_type' => 'services',
                'numberposts' => 4,
                'order' => 'ASC'
            ]);
            if (!empty($serv)) : ?>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href=""><?php echo get_the_title($serv[0]->ID) ?></a></h4>
                            <p><?php echo get_field('description', $serv[0]->ID) ?></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href=""><?php echo get_the_title($serv[1]->ID) ?></a></h4>
                            <p><?php echo get_field('description', $serv[1]->ID) ?></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href=""><?php echo get_the_title($serv[2]->ID) ?></a></h4>
                            <p><?php echo get_field('description', $serv[2]->ID) ?></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href=""><?php echo get_the_title($serv[3]->ID) ?></a></h4>
                            <p><?php echo get_field('description', $serv[3]->ID) ?></p>
                        </div>
                    </div>
                </div>

            <?php endif;  ?>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <?php echo get_post(124)->post_content ?>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="<?php echo get_field('button_link', 124) ?>"><?php echo get_field('button_label', 124) ?></a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <?php echo get_post(159)->post_content ?>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>

                <?php $terms = get_terms([
                    'taxonomy' => 'portfolio_item_type',
                    'hide_empty' => false,
                ]);
                ?>

                <?php foreach ($terms as $term) : ?>
                    <li data-filter=".filter-<?php echo $term->slug ?>"><?php echo $term->name ?></li>
                <?php endforeach; ?>
            </ul>

            <?php $portfolio_items = get_posts([
                'post_type' => 'portfolio_item',
                'numberposts' => -1,
            ]); ?>

            <?php if (!empty($portfolio_items)) : ?>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php foreach ($portfolio_items as $portfolio_item) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo get_the_terms($portfolio_item->ID, 'portfolio_item_type')[0]->slug ?>">
                            <div class="portfolio-img"><img src="<?php echo get_field('image', $portfolio_item)['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <h4><?php echo get_the_title($portfolio_item->ID) ?></h4>
                                <p><?php echo get_the_terms($portfolio_item->ID, 'portfolio_item_type')[0]->name ?></p>
                                <a href="<?php echo get_field('image', $portfolio_item)['url'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php get_the_title($portfolio_item->ID) ?>"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <?php echo get_post(161)->post_content ?>
            </div>

            <?php $team = get_posts(['post_type' => 'team_members', 'numberposts' => 4]);
            if (!empty($team)) :
            ?>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo get_field('photo', $team[0]->ID)['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo get_the_title($team[0]->ID) ?></h4>
                                <span><?php echo get_field('job_position', $team[0]->ID) ?></span>
                                <p><?php echo get_field('description', $team[0]->ID) ?></p>
                                <div class="social">
                                    <a href="<?php echo get_field('twitter_link', $team[0]->ID) ?>"><i class="ri-twitter-fill"></i></a>
                                    <a href="<?php echo get_field('facebook_link', $team[0]->ID) ?>"><i class="ri-facebook-fill"></i></a>
                                    <a href="<?php echo get_field('instagram_link', $team[0]->ID) ?>"><i class="ri-instagram-fill"></i></a>
                                    <a href="<?php echo get_field('linkedin_link', $team[0]->ID) ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo get_field('photo', $team[1]->ID)['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo get_the_title($team[1]->ID) ?></h4>
                                <span><?php echo get_field('job_position', $team[1]->ID) ?></span>
                                <p><?php echo get_field('description', $team[1]->ID) ?></p>
                                <div class="social">
                                    <a href="<?php echo get_field('twitter_link', $team[1]->ID) ?>"><i class="ri-twitter-fill"></i></a>
                                    <a href="<?php echo get_field('facebook_link', $team[1]->ID) ?>"><i class="ri-facebook-fill"></i></a>
                                    <a href="<?php echo get_field('instagram_link', $team[1]->ID) ?>"><i class="ri-instagram-fill"></i></a>
                                    <a href="<?php echo get_field('linkedin_link', $team[1]->ID) ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo get_field('photo', $team[2]->ID)['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo get_the_title($team[2]->ID) ?></h4>
                                <span><?php echo get_field('job_position', $team[2]->ID) ?></span>
                                <p><?php echo get_field('description', $team[2]->ID) ?></p>
                                <div class="social">
                                    <a href="<?php echo get_field('twitter_link', $team[2]->ID) ?>"><i class="ri-twitter-fill"></i></a>
                                    <a href="<?php echo get_field('facebook_link', $team[2]->ID) ?>"><i class="ri-facebook-fill"></i></a>
                                    <a href="<?php echo get_field('instagram_link', $team[2]->ID) ?>"><i class="ri-instagram-fill"></i></a>
                                    <a href="<?php echo get_field('linkedin_link', $team[2]->ID) ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo get_field('photo', $team[3]->ID)['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo get_the_title($team[3]->ID) ?></h4>
                                <span><?php echo get_field('job_position', $team[3]->ID) ?></span>
                                <p><?php echo get_field('description', $team[3]->ID) ?></p>
                                <div class="social">
                                    <a href="<?php echo get_field('twitter_link', $team[3]->ID) ?>"><i class="ri-twitter-fill"></i></a>
                                    <a href="<?php echo get_field('facebook_link', $team[3]->ID) ?>"><i class="ri-facebook-fill"></i></a>
                                    <a href="<?php echo get_field('instagram_link', $team[3]->ID) ?>"><i class="ri-instagram-fill"></i></a>
                                    <a href="<?php echo get_field('linkedin_link', $team[3]->ID) ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <?php echo get_post(179)->post_content ?>
            </div>
            <?php $pricing_plans = get_posts(['post_type' => 'pricing_plans', 'numberposts' => 3]);
            if (!empty($pricing_plans)) :
            ?>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3><?php echo get_the_title($pricing_plans[0]->ID) ?></h3>
                            <h4><sup>$</sup><?php echo get_field('price', $pricing_plans[0]->ID) ?><span>per month</span></h4>
                            <ul>
                                <?php
                                $benefits = preg_split('/\r\n|\r|\n/',  get_field('benefits', $pricing_plans[0]->ID));
                                if (!empty(array_filter($benefits))) :
                                    foreach ($benefits as $ben) : ?>
                                        <li><i class="bx bx-check"></i><?php echo $ben ?></li>
                                <?php endforeach;
                                endif; ?>
                                <?php
                                $crossed_benefits = preg_split('/\r\n|\r|\n/', get_field('crossed_benefits', $pricing_plans[0]->ID));
                                if (!empty(array_filter($crossed_benefits))) :
                                    foreach ($crossed_benefits as $cr_ben) : ?>
                                        <li class="na"><i class="bx bx-x"></i> <span><?php echo $cr_ben ?></span></li>
                                <?php endforeach;
                                endif;
                                ?>
                            </ul>
                            <a href="<?php echo get_field('get_started_link', $pricing_plans[0]->ID) ?>" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3><?php echo get_the_title($pricing_plans[1]->ID) ?></h3>
                            <h4><sup>$</sup><?php echo get_field('price', $pricing_plans[1]->ID) ?><span>per month</span></h4>
                            <ul>
                                <?php
                                $benefits = preg_split('/\r\n|\r|\n/',  get_field('benefits', $pricing_plans[1]->ID));
                                if (!empty(array_filter($benefits))) :
                                    foreach ($benefits as $ben) : ?>
                                        <li><i class="bx bx-check"></i><?php echo $ben ?></li>
                                <?php endforeach;
                                endif; ?>
                                <?php
                                $crossed_benefits = preg_split('/\r\n|\r|\n/', get_field('crossed_benefits', $pricing_plans[1]->ID));
                                if (!empty(array_filter($crossed_benefits))) :
                                    foreach ($crossed_benefits as $cr_ben) : ?>
                                        <li class="na"><i class="bx bx-x"></i> <span><?php echo $cr_ben ?></span></li>
                                <?php endforeach;
                                endif; ?>
                            </ul>
                            <a href="<?php echo get_field('get_started_link', $pricing_plans[1]->ID) ?>" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3><?php echo get_the_title($pricing_plans[2]->ID) ?></h3>
                            <h4><sup>$</sup><?php echo get_field('price', $pricing_plans[2]->ID) ?><span>per month</span></h4>
                            <ul>
                                <?php
                                $benefits = preg_split('/\r\n|\r|\n/',  get_field('benefits', $pricing_plans[2]->ID));
                                if (!empty(array_filter($benefits))) :
                                    foreach ($benefits as $ben) : ?>
                                        <li><i class="bx bx-check"></i><?php echo $ben ?></li>
                                <?php endforeach;
                                endif; ?>
                                <?php
                                $crossed_benefits = preg_split('/\r\n|\r|\n/', get_field('crossed_benefits', $pricing_plans[2]->ID));
                                if (!empty(array_filter($crossed_benefits))) :
                                    foreach ($crossed_benefits as $cr_ben) : ?>
                                        <li class="na"><i class="bx bx-x"></i> <span><?php echo $cr_ben ?></span></li>
                                <?php endforeach;
                                endif; ?>
                            </ul>
                            <a href="<?php echo get_field('get_started_link', $pricing_plans[2]->ID) ?>" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Arsha</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php get_footer() ?>