<?php
/*
Template Name: About Us 
*/
get_header();
$videoPlay = get_field('video_play_btn_image','option');
$bannerbottomImg = get_field('banner_bottom_img');
?>


            <section class="banner-sec about-banner-sec theme-bg-color" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="banner-links-main">
							<ul>
								<li class="banner-links"><a href="#">Home</a></li>
								<li class="banner-links"><span>/</span></li>
								<li class="banner-links active"><a href="#">About Us</a></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">	
								<div class="banner-text-wrap ">
									<div class="banner-text">
										<div class="banner-heading-wrap">
											<?php echo the_field('about_heading_main');?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">	
								<div class="about-banner-right">
									<p><?php echo the_content();?></p>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="d-none d-lg-flex">
									<?php echo the_field('heading_mobile');?>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="banner-btn-main d-flex flex-wrap justify-content-lg-end gap-3">
									<div class="btn-wp">
			                        	<a href="" class="btn btn-with-arrow "><?php echo the_field('book_btn_text');?></a>
			                        </div>
			                        <div class="btn-wp">	
										<a href="" class="btn btn-with-arrow border-btn"><?php echo the_field('view_portfolio_text');?> </a>
			                        </div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>
			<section class="about-bbi-sec">
				<div class="container">
					<div class="a_banner_bottom_img">
						<img src="<?php echo $bannerbottomImg['url'];?>" alt="<?php echo $bannerbottomImg['alt'];?>">
					</div>	
				</div>
			</section>	
			<section class="our-values-sec">
				<div class="container">
					<div class="our-values-top">
						<div class="row">
							<div class="col-lg-8 col-md-6 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('value_small_title');?></span>
									<h2 class="text-uppercase"><?php echo the_field('value_uppercase_title');?></h2>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 col-12 text-end align-self-center">
								<div class="cta-main">
									<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="our-values-bottom">
                        <?php if (have_rows('values_rows')) : ?>
                            <?php while (have_rows('values_rows')) : the_row(); ?>
                                <div class="our-values-row">
                                    <div class="our-values-col">
                                        <div class="our-values-text">
                                            <h3><?php the_sub_field('values_title'); ?></h3>
                                            <p><?php the_sub_field('values_text'); ?></p>
                                        </div>
                                    </div>

                                    <?php if (have_rows('values_columns')) : ?>
                                        <?php while (have_rows('values_columns')) : the_row(); ?>
                                            <div class="our-values-col">
                                                <div class="our-values-box" style="background-color:<?php the_sub_field('column_background_color'); ?>;">
                                                    <div class="our-values-box-left">
                                                        <div class="points-count-box">
                                                            <h3><?php the_sub_field('column_count'); ?></h3>
                                                            <p><?php the_sub_field('column_description'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="our-values-box-img">
                                                        <?php
                                                        $image = get_sub_field('column_image');
                                                        if ($image) :
                                                        ?>
                                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
					<div class="achievements-wp">
						<div class="achievements-logos-row">
                            <?php if(have_rows('achievement_logos')):while(have_rows('achievement_logos')):the_row();
                            $achievementLogo = get_sub_field('achievement_logo');
                            ?>
							<div class="achievements-logos">
								<img src="<?php echo $achievementLogo['url'];?>" alt="<?php echo $achievementLogo['alt'];?>">
							</div>
                            <?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>		
			<section class="journey-sec">
				<div class="container">
					<div class="journey-top">
						<div class="section-title">
							<span class="sec-title-small"><?php echo the_field('journey_small_title');?></span>
							<h2 class="text-uppercase"><?php echo the_field('journey_uppercase_title');?></h2>
						</div>
					</div>
					<div class="journey-box-main">
						<div class="row">
                        <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                                        <div class="journey-content">

                                            <?php if (have_rows('journey_sections')) : ?>
                                                <?php while (have_rows('journey_sections')) : the_row(); ?>

                                                    <div class="journey-years d-flex">
                                                        <div class="years-main d-flex align-items-center justify-content-center gap-3">
                                                            <span><?php the_sub_field('journey_year_1'); ?></span>
                                                            <span class="right-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.572" height="10.736" viewBox="0 0 19.572 10.736">
                                                                    <path id="right-arrow" d="M14.2,107.5l-.872.872,3.879,3.879H0v1.233H17.212l-3.879,3.879.872.872,5.368-5.368Z" transform="translate(0 -107.5)"/>
                                                                </svg>
                                                            </span>
                                                            <span><?php the_sub_field('journey_year_2'); ?></span>
                                                        </div>
                                                    </div>
                                                <?php if(have_rows('journeys')):while(have_rows('journeys')):the_row();?>
                                                    <div class="card-text-main journey-text">
                                                        <h3><?php the_sub_field('journey_title'); ?></h3>
                                                        <p><?php the_sub_field('journey_description'); ?></p>
                                                        <ul class="card-bullets">
                                                            <?php if(have_rows('journey_bullets')):while(have_rows('journey_bullets')):the_row();?>
                                                            <li><?php the_sub_field('bullet_name'); ?></li>
                                                           <?php endwhile;endif;?>
                                                        </ul>
                                                    </div>
                                                    <div class="journey-content-border"></div>
                                                    <?php endwhile;endif;?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                        </div>
                                </div>

							<div class="col-xl-5 col-lg-12 col-md-12 col-12">
								<div class="journey-img-main">
                                    <?php $journeyImg = get_field('journey_right_image');?>
									<img src="<?php echo $journeyImg['url'];?>" alt="<?php echo $journeyImg['alt'];?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<section class="vision-mission-sec theme-bg-color">
				<div class="container">
					<div class="vision-mission-top">
						<div class="section-title">
							<span class="sec-title-small"><?php echo the_field('vision_small_title');?></span>
							<h2 class="text-uppercase"><?php echo the_field('vision_uppercase_title');?></h2>
						</div>
					</div>
					<div class="vision-mission-main">
						<div class="row">
                            <?php if(have_rows('vision_and_mission')):while(have_rows('vision_and_mission')):the_row();?>
                            <?php if(get_row_layout() == 'v_and_m'):?>
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="vision-mission-box">
									<div class="vm-icon">
                                        <?php $vmicon = get_sub_field('vm_icon');?>
										<img src="<?php echo $vmicon['url'];?>" alt="<?php echo $vmicon['alt'];?>">
									</div>
									<div class="card-text-main journey-text">
										<h3><?php echo get_sub_field('vm_title');?></h3>
										<p><?php echo get_sub_field('vm_text');?></p>
									</div>
								</div>		
							</div>
                                <?php elseif(get_row_layout()=='values'):?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="vision-mission-box">
									<div class="vm-icon">
                                        <?php $vicon = get_sub_field('value_icon');?>
										<img src="<?php echo $vicon['url'];?>" alt="<?php echo $vicon['alt'];?>">
									</div>
									<div class="card-text-main journey-text">
										<h3><?php echo get_sub_field('value_title');?></h3>
										<p><?php echo get_sub_field('value_des');?></p>
										<ul class="card-bullets">
                                            <?php if(have_rows('value_text')):while(have_rows('value_text')):the_row();?>
											<li><?php echo get_sub_field('text');?></li>
                                            <?php endwhile;endif;?>
											<!-- <li>Following Agile Methodology</li>
											<li>Follow Customer First Approach</li>
											<li>Commitment to Exceptional Quality</li>
											<li>Commitment to Exceptional Quality</li>
											<li>Attention to Details</li> -->
										</ul>
									</div>
								</div>		
							</div>
                            <?php endif;?>
                            <?php endwhile;endif;?>
							<!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="vision-mission-box">
									<div class="vm-icon">
										<img src="assets/images/mission-icon.svg ">
									</div>
									<div class="card-text-main journey-text">
										<h3>Our Mission</h3>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem .</p>
									</div>
								</div>		
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="vision-mission-box">
									<div class="vm-icon">
										<img src="assets/images/values-icon.svg ">
									</div>
									<div class="card-text-main journey-text">
										<h3>Our Values</h3>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem .</p>
										<ul class="card-bullets">
											<li>Attention to Details</li>
											<li>Following Agile Methodology</li>
											<li>Follow Customer First Approach</li>
											<li>Commitment to Exceptional Quality</li>
											<li>Commitment to Exceptional Quality</li>
											<li>Attention to Details</li>
										</ul>
									</div>
								</div>		
							</div> -->
						</div>
					</div>
				</div>
			</section>	
			<section class="team-section">
				<div class="container">
					<div class="team-sec-top">
						<div class="section-title">
							<span class="sec-title-small white_text"><?php echo the_field('team_small_title');?></span>
							<h2 class="text-uppercase white_text"><?php echo the_field('team_uppercase_title');?></h2>
                        </div>                                         
					</div>
					<div class="team-sec-bottom">
					    <div class="team-person-slider">
                        <?php if(have_rows('team_slider')):while(have_rows('team_slider')):the_row();
						$teamImg = get_sub_field('team_person_image');
						?>
					      	<div class="team-person-info-wp">
						        <div class="flip">
							        <div class="front">
							            <div class="team-person-img">
							              <img src="<?php echo $teamImg['url'];?>" alt="<?php echo $teamImg['alt'];?>">
							            </div>
							        </div>
							        <div class="back">
							            <div class="team-person-info">
							             <?php echo get_sub_field('team_back_info');?>
							            </div>
							        </div>
						        </div>
						        <div class="team-person-info">
						         <?php echo get_sub_field('person_info');?>
						        </div>
					     	 </div>
							<?php endwhile;endif;?>
					    </div>
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
			<!-- Shortcode Of Contact Us Section -->
			<?php echo do_shortcode('[custom_contact_us_section]') ;?>
<?php 

get_footer();

?>