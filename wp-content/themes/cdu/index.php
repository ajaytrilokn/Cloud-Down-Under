<?php

get_header();

?>

<section class="banner-sec about-banner-sec theme-bg-color banner-height-auto">
    <div class="banner-wrap  ">
        <div class="container">
            <div class="banner-links-main">
            <?php if (function_exists('custom_page_breadcrumbs')) custom_page_breadcrumbs(); ?>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-text-wrap ">
                        <div class="banner-text">
                            <div class="banner-heading-wrap">
                                <?php echo the_field('blog_listing_title', 'option'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
                    <div class="about-banner-right">
                        <p><?php echo the_field('blog_listing_text', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-page-sec">
    <div class="container">
        <div class="blog-page-row">
            <div class="blog-categories-main">
                <h3 class="blog-sub-title">Categories</h3>
                <div class="select-menu">
							  	<div class="select-btn d-lg-none">
							    	<span class="sBtn-text">Categories Select</span>
							    	<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 5.75L7 9.25L10.5 5.75" stroke="#131316" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							  	</div>
                <ul class="blog-categories options">
                    <?php
                    $args = array(
                        'post' => 'post',
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );

                    $cats = get_categories($args);

                    foreach ($cats as $cat) {
                        ?>
                        <li class="option"><a href="<?php echo get_category_link($cat->term_id) ?>" class="category-link"
                                data-category="<?php echo esc_attr($cat->slug); ?>"> <?php echo $cat->name; ?></a></li>
                        <?php
                    }
                    ?>


                </ul>
                </div>
            </div>
            <div class="blog-page-lists">
                <div class="blog-page-latest-blogs">
                    <h3 class="blog-sub-title">Latest Insights</h3>
                    <div class="blog-sec-main">
                        <div class="blog-left w-100">
                            <?php
                            // Query to fetch latest posts
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            );
                            $latest_posts = new WP_Query($args);

                            if ($latest_posts->have_posts()):
                                while ($latest_posts->have_posts()):
                                    $latest_posts->the_post();
                                    ?>
                                    <div class="blog-left-col">
                                        <div class="blog-left-img">
                                            <a href="<?php the_permalink(); ?>" class="blog-img-link">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('thumbnail');
                                                } else {
                                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/default-thumbnail.jpg" alt="Placeholder">';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                        <div class="blog-left-info">
                                            <div class="blog-left-date">
                                                <span>By <?php the_author(); ?></span>
                                                <span class="dots"></span>
                                                <span><?php echo get_the_date('d F Y'); ?></span>
                                            </div>
                                            <div class="blog-left-title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <h4><?php the_title(); ?></h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
                                echo '<p>No posts found</p>';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="all-insights-main">
                    <h3 class="blog-sub-title">All Insights</h3>
                    <div class="all-insights-row">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>
                                <div class="blog--col <?php echo esc_attr($post->post_name); ?> post-item"
                                    data-category="<?php echo esc_attr(get_the_category()[0]->slug); ?>">
                                    <div class="blog--img">
                                        <a href="<?php the_permalink(); ?>" class="blog-img-link">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumbnail');
                                            } else {
                                                echo '<img src="' . get_template_directory_uri() . '/assets/images/default-thumbnail.jpg" alt="Placeholder">';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="blog--info">
                                        <div class="blog--date">
                                            <span>By <?php the_author(); ?></span>
                                            <span class="dots"></span>
                                            <span><?php echo get_the_date('d F Y'); ?></span>
                                        </div>
                                        <div class="blog--title">
                                            <a href="<?php the_permalink(); ?>">
                                                <h4><?php the_title(); ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>No posts found</p>';
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- Shortcode Of Contact Us Section -->
<?php echo do_shortcode('[custom_contact_us_section]'); ?>

<?php

get_footer();

?>