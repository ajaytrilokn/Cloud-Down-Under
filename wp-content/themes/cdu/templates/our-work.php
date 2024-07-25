<?php
/*
Template Name:Our Work Page
*/
get_header();
$videoPlay = get_field('video_play_btn_image','option');
?>

            <section class="banner-sec work-banner-sec white-bg-color" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-12 col-12">	
								<div class="banner-text-wrap ">
									<div class="banner-text">
										<div class="banner-links-main">
											<ul>
												<li class="banner-links"><a href="#">Home</a></li>
												<li class="banner-links"><span>/</span></li>
												<li class="banner-links active"><a href="#">Work</a></li>
											</ul>
										</div>
										<div class="banner-heading-wrap">
											<?php echo the_field('work_banner_heading');?>
										</div>
										<div class="service-banner-points-wp">
											<p><?php echo the_content();?></p>
											<ul class="banner-point">
                                                <?php if(have_rows('work_points')):while(have_rows('work_points')):the_row();?>
							                    <li><?php echo get_sub_field('work_point_text');?></li>
                                                <?php endwhile;endif;?>
							                </ul>
							            </div>    
										
									</div>
									<div class="banner-btn-main d-flex flex-wrap">
										<div class="btn-wp">
				                        	<a href="tel:<?php echo the_field('book_free_btn_url');?>" class="btn btn-with-arrow me-3 mb-3"><?php echo the_field('book_free_btn_text');?></a>
				                        </div>
				                        <div class="btn-wp">	
											<a href="<?php echo the_field('hire_team_btn_url');?>" class="btn btn-with-arrow border-btn me-3 mb-3"><?php echo the_field('hire_team_btn_text');?></a>
				                        </div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 col-12 align-self-center">	
								<div class="banner-v-img">
                                    <?php $workImg = get_field('work_banner_right_img');?>
									<img src="<?php echo $workImg['url'];?>" alt="<?php echo $workImg['alt'];?>">
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<section class="work-page-sec">
            <div class="portfolio-p-row-main">
                <div class="portfolio-grid col-one">
                    <?php
                    if (have_rows('portfolio_items_column_one')) :
                        while (have_rows('portfolio_items_column_one')) : the_row();
                            $portfolio_image = get_sub_field('portfolio_image');
                            $portfolio_logo = get_sub_field('portfolio_logo');
                            $case_study_url = get_sub_field('case_study_url');
                            $case_study_types = get_sub_field('case_study_types');
                    ?>
                            <div class="portfolio-grid-item">
                                <img class="portfolio-img" src="<?php echo esc_url($portfolio_image['url']); ?>" alt="<?php echo esc_attr($portfolio_image['alt']); ?>">
                                <div class="portfolio-item-info">
                                    <div class="portfolio-info-row">
                                        <div class="portfolio-logo">
                                            <img class="portfolio-logo-img" src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>">
                                        </div>
                                        <div class="portfolio-btn">
                                            <a href="<?php echo esc_url($case_study_url); ?>" class="btn btn-with-arrow">View Case Study</a>
                                        </div>
                                    </div>
                                    <div class="cs--type-wp">
                                        <ul class="case--study-type-inner">
                                            <?php
                                            if ($case_study_types) :
                                                foreach ($case_study_types as $type) :
                                            ?>
                                                    <li><a class="case--study-type" href="#"><?php echo esc_html($type['case_study_type']); ?></a></li>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo esc_url($case_study_url); ?>" class="portfolio-link"></a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        // No rows found
                        echo 'No portfolio items found for column one.';
                    endif;
                    ?>
                </div>
                <div class="portfolio-grid col-two">
                    <?php
                    if (have_rows('portfolio_items_column_two')) :
                        while (have_rows('portfolio_items_column_two')) : the_row();
                            $portfolio_image = get_sub_field('portfolio_image');
                            $portfolio_logo = get_sub_field('portfolio_logo');
                            $case_study_url = get_sub_field('case_study_url');
                            $case_study_types = get_sub_field('case_study_types');
                    ?>
                            <div class="portfolio-grid-item">
                                <img class="portfolio-img" src="<?php echo esc_url($portfolio_image['url']); ?>" alt="<?php echo esc_attr($portfolio_image['alt']); ?>">
                                <div class="portfolio-item-info">
                                    <div class="portfolio-info-row">
                                        <div class="portfolio-logo">
                                            <img class="portfolio-logo-img" src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>">
                                        </div>
                                        <div class="portfolio-btn">
                                            <a href="<?php echo esc_url($case_study_url); ?>" class="btn btn-with-arrow">View Case Study</a>
                                        </div>
                                    </div>
                                    <div class="cs--type-wp">
                                        <ul class="case--study-type-inner">
                                            <?php
                                            // Loop through case study types
                                            if ($case_study_types) :
                                                foreach ($case_study_types as $type) :
                                            ?>
                                                    <li><a class="case--study-type" href="#"><?php echo esc_html($type['case_study_type']); ?></a></li>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                    <a href="<?php echo esc_url($case_study_url); ?>" class="portfolio-link"></a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        // No rows found
                        echo 'No portfolio items found for column two.';
                    endif;
                    ?>
                </div>
            </div>
			</section>

			<section class="awards-sec">
				<div class="container">
					<div class="awards-top">
						<div class="section-title">
						<span class="sec-title-small"><?php echo the_field('award_title_small','option');?></span>
							<h2 class="text-uppercase"><?php echo the_field('award_uppercase_title','option');?></h2>
						</div>
					</div>
					<div class="awards-bottom">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="awards-left-main">
									<div class="awards-left-top">
									<?php echo the_field('award_left_top_text','option');?>
									</div>
									<div class="awards-left-bottom"> 
										<p class="awards-text"><?php echo the_field('award_left_bottom_text','option');?></p>
										<div class="btn-wrap">
											<button class="slick-arrow slick-prev prev-btn">Previous</button>
											<button class="slick-arrow slick-next next-btn">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="awards-slider-main">
									<div class="awards-slider">
										<?php if(have_rows('award_slider','option')):while(have_rows('award_slider','option')):the_row();
										$awardImg = get_sub_field('award_slider_image','option');
										?>
										<div class="awards-slide">
											<div class="awards-slide-img">
												<img src="<?php echo $awardImg['url'];?>" alt="<?php echo $awardImg['alt'];?>">
											</div>
										</div>
										<?php endwhile;endif;?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="testimonials-sec theme-bg-color">
				<div class="container">
					<div class="testimonials-top">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('testimonial_small_title','option');?></span>
									<h2 class="text-uppercase"><?php echo the_field('testimonail_uppercase_title','option');?></h2>
									
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 col-12 text-end align-self-center">
								<div class="cta-main d-flex justify-content-end gap-2">
									<a href="<?php echo the_field('see_all_btn_url','option');?>" class="btn btn-with-arrow border-btn"><?php echo the_field('see_all_btn','option');?></a>
									<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonials-slider-main">
					<div class="testimonials-slider">
						<?php if (have_rows('testimonials','option')) : ?>
							<?php while (have_rows('testimonials','option')) : the_row(); ?>
								<div class="testimonials-slide">
									<div class="testimonials-content">
										<div class="testimonials-top">
											<?php if (get_sub_field('testimonial_type','option') == 'text') : ?>
												<div class="testimonials-top-text <?php echo get_sub_field('background_class','option'); ?>">
													<p><?php the_sub_field('testimonial_text','option'); ?></p>
												</div>
											<?php elseif (get_sub_field('testimonial_type','option') == 'video') : 
												$personImg = get_sub_field('video_thumbnail','option');
												?>
												<div class="testimonials-top-video">
													<img class="client-img-v" src="<?php echo $personImg['url'];?>" alt="<?php $personImg['alt'];?>">
													<a href="<?php the_sub_field('video_url'); ?>" data-fancybox class="play-link"><img src="<?php echo $videoPlay['url'];?>" alt="<?php echo $videoPlay['alt'];?>"></a>
												</div>
											<?php endif; ?>
										</div>
										<div class="testimonials-bottom">
											<div class="testimonials-person-info">
												<div class="t-person-img">
													<?php $testimonialImg = get_sub_field('person_image','option');?>
													<img src="<?php echo $testimonialImg['url'];?>" alt="<?php echo $testimonialImg['alt'];?>">
												</div>
												<div class="t-person-info">
													<span class="name"><?php the_sub_field('person_name','option'); ?></span>
													<span class="name-position"><?php the_sub_field('person_position','option'); ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							  <?php endwhile; ?>
						    <?php endif; ?>
					    </div>

					</div>
				</div>
			</section>

            <section class="blog-sec">
				<div class="container">
					<div class="blog-top">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('blog_title_small','option');?></span>
									<h2 class="text-uppercase"><?php echo the_field('blog_title_uppercase','option');?></h2>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 col-12 text-end align-self-center">
								<div class="cta-main d-flex justify-content-end gap-2">
									<a href="<?php echo the_field('see_all_btn_url','option');?>" class="btn btn-with-arrow border-btn"><?php echo the_field('see_all_btn','option');?></a>
									<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
								</div>
							</div>
						</div>
					</div>
				 <div class="blog-sec-main">
					<div class="blog-left">
						<?php
						$args = array(
							'post_type' => 'post',  
							'posts_per_page' => 2,  
							'order' => 'ASC'       
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
						?>
						<div class="blog-left-col">
							<div class="blog-left-img">
								<a href="<?php the_permalink(); ?>" class="blog-img-link">
									<?php the_post_thumbnail('thumbnail'); ?>
								</a>
							</div>
							<div class="blog-left-info">
								<div class="blog-left-date">
									<span>By <?php the_author(); ?></span>
									<span class="dots"></span>
									<span><?php echo get_the_date('d F Y'); ?></span>
								</div>
								<div class="blog-left-title">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								</div>
								<div class="blog-left-text">
									<p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
								</div>
							</div>
						</div>
						<?php
							endwhile;
							wp_reset_postdata(); 
						endif;
						?>
					</div>

					<div class="blog-right">
						<div class="letest-blog-main">
							<?php
							$args_sidebar = array(
								'post_type' => 'post',
								'posts_per_page' => 4,
								'order' => 'DESC'
							);

							$query_sidebar = new WP_Query($args_sidebar);

							if ($query_sidebar->have_posts()) :
								while ($query_sidebar->have_posts()) : $query_sidebar->the_post();
							?>
							<div class="letest-blog-row">
								<div class="letest-blog-date">
									<div class="blog-left-date">
										<span>By <?php the_author(); ?></span>
										<span class="dots"></span>
										<span><?php echo get_the_date('d F Y'); ?></span>
									</div>
								</div>
								<div class="letest-blog-wp">
									<div class="letest-blog-img">
										<a href="<?php the_permalink(); ?>" class="letest-blog-link"><?php the_post_thumbnail('thumbnail'); ?></a>
									</div>
									<div class="letest-blog-info">
										<a href="<?php the_permalink(); ?>" class="letest-blog-text"><?php the_title(); ?></a>
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
			</section>

			<!-- Content End -->

            <?php echo do_shortcode('[custom_contact_us_section]') ;?>
<?php

get_footer();

?>