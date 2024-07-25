<?php
/*
Template Name:Career Page
*/
get_header();

?>

            <section class="banner-sec  career-banner theme-bg-color banner-height-auto" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="row">
							<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">	
								<div class="banner-text-wrap ">
									<div class="banner-text">
										<div class="banner-links-main">
											<ul>
												<li class="banner-links"><a href="#">Home</a></li>
												<li class="banner-links"><span>/</span></li>
												<li class="banner-links active"><a href="#">Careers</a></li>
											</ul>
										</div>
										<div class="banner-heading-wrap">
											<?php echo the_field('banner_title');?>
										</div>
										<div class="service-banner-points-wp">
											<p><?php echo the_field('banner_point_title');?></p>
											<ul class="banner-point">
                                            <?php foreach(get_field('banner_points') as $point):?>
							                    <li><?php echo $point['point_name'];?></li>
                                                <?php endforeach;?>
							                </ul>
							            </div>    
										
									</div>
									<div class="banner-btn-main d-flex flex-wrap">
										<div class="btn-wp">
				                        	<a href="<?php echo the_field('hire_out_team_btn_url');?>" class="btn btn-with-arrow me-3 mb-3"><?php echo the_field('hire_our_team_btn');?></a>
				                        </div>
				                        <div class="btn-wp">	
											<a href="<?php echo the_field('apply_now_btn_url');?>" class="btn btn-with-arrow border-btn me-3 mb-3"><?php echo the_field('apply_now_btn');?></a>
				                        </div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 align-self-center">	
								<div class="banner-v-img">
                                    <?php $careerImg = get_field('career_banner_img');?>
									<img src="<?php echo $careerImg['url'];?>" alt="<?php echo $careerImg['alt'];?>">
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<section class="cdu-careers-sec">
				<div class="container">
					<div class="cdu-careers-top">
						<div class="section-title">
							<span class="sec-title-small"><?php echo the_field('career_small_title');?></span>
							<h2 class="text-uppercase"><?php echo the_field('career_uppercase_title');?></h2>
						</div>
					</div>
					<div class="careers-bottom">
                            <?php if(have_rows('career_content')): ?>
                            <div class="careers-filters-main">
                            <div class="button-group filter-button-group scrolling-wrapper" id="filters">
                                <?php 
                                foreach(get_field('career_filter_btns') as $filterbtn):
                                $active_class = ($filterbtn['filter_btn_id'] == 'all') ? 'active' : '';
                                ?>
						        <button class="btn btn-primary careers-btn <?php echo $active_class;?>" id="<?php echo $filterbtn['filter_btn_id'];?>"><?php echo $filterbtn['filter_btn_name'];?></button>
                                <?php endforeach;?>
						    </div>
                            </div>
                            <div class="careers-content-wrap" id="careersRow">
                                <?php while(have_rows('career_content')): the_row(); ?>
                                    <?php if(have_rows('career_vacancy')): ?>
                                        <?php while(have_rows('career_vacancy')): the_row(); ?>
                                            <div class="careers-row <?php echo get_sub_field('career_class');?>">
                                                <div class="careers-left">
                                                    <h3><?php echo get_sub_field('career_left_title'); ?></h3>
                                                    <p><?php echo get_sub_field('career_left_text'); ?></p>
                                                    <ul>
                                                        <?php foreach(get_sub_field('career_left_lists') as $list): ?>
                                                            <li><?php echo $list['career_left_list_name']; ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <div class="careers-right-btn">
                                                    <a href="<?php echo get_sub_field('career_right_btn_url'); ?>" class="btn btn-with-arrow border-btn"><?php echo get_sub_field('career_right_btn'); ?></a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                    </div> 
				</div>
			</section>
			
			<section class="testimonials-sec gray-bg-color">
				<div class="container">
					<div class="testimonials-top">
						<div class="section-title">
							<span class="sec-title-small"><?php echo the_field('team_small_title');?></span>
							<h2 class="text-uppercase"><?php echo the_field('team_uppercase_title');?></h2>							
						</div>
				
					</div>
					<div class="testimonials-slider-main">
						<div class="testimonials-slider">
                            <?php if(have_rows('testimonial_slider')):while(have_rows('testimonial_slider')):the_row();?>
							<div class="testimonials-slide">
								<div class="testimonials-content">
									<div class="testimonials-top">
										<div class="testimonials-top-text <?php echo get_sub_field('background');?>">
											<div class="quote-icon">
												<i class="fa fa-quote-right" aria-hidden="true"></i>
											</div>
											<p><?php echo get_sub_field('testimonials_text');?></p>
										</div>
									</div>
									<div class="testimonials-bottom">
										<div class="testimonials-person-info">
											<div class="t-person-img">
                                                <?php $clImg = get_sub_field('testimonial_image');?>
												<img src="<?php echo $clImg['url'];?>" alt="<?php echo $clImg['alt'];?>">
											</div>
											<div class="t-person-info">
                                            <?php echo get_sub_field('testimonial_info');?>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>
		

			<section class="process-sec process-section">
				<div class="container">
					<div class="process-top">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small white_text"><?php echo the_field('process_small_title');?></span>
									<h2 class="text-uppercase white_text"><?php echo the_field('process_title_uppercase');?></h2>
								</div>
							</div>
							<!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12"></div> -->
						</div>
					</div>

					<process-section class="the-process">
			            <section class="the-process__step-images" aria-hidden="true">
                        <?php if(have_rows('process_images')):
							while(have_rows('process_images')):the_row();
							$processImg = get_sub_field('process_img');
							?>							
		              	<div class="the-process__step-image" data-step-image>
		                	<img src="<?php echo $processImg['url'];?>" class="attachment-full size-full" alt="<?php echo $processImg['alt'];?>"/>
		              	</div>
						<?php endwhile;endif;?>
			            </section>
	            		<section class="the-process__steps the-process__steps--in-page">

                        <?php if(have_rows('process_content')):while(have_rows('process_content')):the_row();?>
              			<article class="the-process__step" data-is-active data-is-toggled="true" data-step>
			                <div class="the-process__step-circle">
				                <svg height="48" width="48" class="the-process__step-circle-anim">
				                    <circle class="circle" cx="50%" cy="50%" r="50%" stroke="#fcbc13" stroke-width="1" fill-opacity="0" />
				                </svg>
				                <a href="#discovery" data-step-link><?php echo get_sub_field('steps');?></a>
			                </div>
			                <h2 class="the-process__step-heading">
			                  <a href="#discovery" data-step-link><?php echo get_sub_field('heading');?></a>
			                </h2>
                			<div class="the-process__step-contents">
                  				<div class="the-process__step-description">
			                    	<?php if(have_rows('step_description')):while(have_rows('step_description')):the_row();?>
									<?php echo get_sub_field('step_title');?>
			                    	<ul>
										<?php if(have_rows('step_lists')):while(have_rows('step_lists')):the_row();?>
					                    <li><?php echo get_sub_field('step_list');?></li>
										<?php endwhile;endif;?>
					                </ul>
			                    	<?php endwhile;endif;?>
                  				</div>
								  <div class="the-process__step-img">
									<?php $mobileImg = get_sub_field('mobile_image','option');?>
					                    <img src="<?php echo $mobileImg['url'];?>" class="attachment-full size-full" alt="<?php echo $mobileImg['alt'];?>"/>
					                </div>
				            </div>
              			</article>
						<?php endwhile;endif;?>
	            		</section>
	          		</process-section>	
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

            <!-- Shortcode Of Contact Us Section -->
			<?php echo do_shortcode('[custom_contact_us_section]') ;?>

<?php 

get_footer();

?>