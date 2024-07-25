<?php 
get_header();
?>

            <section class="banner-sec work-details-banner white-bg-color banner-height-auto" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">	
								<div class="banner-text-wrap ">
									<div class="banner-text">
										<div class="banner-links-main">
											<ul> 
												<li class="banner-links"><a href="#">Home</a></li>
												<li class="banner-links"><span>/</span></li>
												<li class="banner-links active"><a href="#">Work</a></li>
												<li class="banner-links"><span>/</span></li>
												<li class="banner-links active"><a href="#"><?php echo the_field('cs_title');?></a></li>
											</ul>
										</div>
										<div class="banner-heading-wrap">
											<h1 class="banner-heading text-uppercase font-we-sb "><?php echo the_field('cs_title');?></h1>
										</div>
										<div class="work-banner-sub-text">
											<p><?php echo the_field('cs_sub_text');?></p>
							            </div>    
										
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex align-self-center justify-content-end">	
								<div class="case-study-icon">
                                    <?php $CSIcon = get_field('cs_icon');?>
									<img src="<?php echo $CSIcon['url'];?>" alt="<?php echo $CSIcon['alt'];?>">
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<section class="work-details-img-sec">
				<div class="container">
					<div class="work-details-img">
                        <?php $wdesktopImg = get_field('work_details_desktop_img');
                              $wmobileImg = get_field('work_details_mobile_img');?>
						<img class="wd-img d-none d-md-block " src="<?php echo $wdesktopImg['url'];?>" alt="<?php echo $wdesktopImg['alt'];?>">
						<img class="wd-img d-md-none " src="<?php echo $wmobileImg['url'];?>" alt="<?php echo $wmobileImg['alt'];?>">
					</div>
				</div>
			</section>

			<section class="work-d-ss-text-sec">
				<div class="work-d-ss-text-top">
					<div class="container">
						<div class="work-d-ss-text-wrap">
							<div class="row">
								<div class="col-md-8 col-12">
									<div class="work-d-text">
										<?php echo the_content();?>
									</div>
								</div>
								<div class="col-md-4 col-12">
									<ul class="work-d-text-points">
                                        <?php if(have_rows('work_text_points')):while(have_rows('work_text_points')):the_row();?>
										<li class="font-we-bl"><?php echo get_sub_field('work_point_name');?></li>
                                        <?php endwhile;endif;?>
									</ul>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="work-d-ss-text-bottom" style="background-color:<?php echo the_field('work_text_bottom_bg');?>">
					<div class="container">
						<div class="work-d-ss-text-wrap">
							<div class="work-d-ss">
								<?php $btmImg = get_field('work_bottom_image');?>
								<img src="<?php echo $btmImg['url'];?>" alt="<?php echo $btmImg['alt'];?>">
							</div>
						</div>
					</div>
				</div>
				<div class="work-d-info-main">
					<div class="container">
						<div class="work-d-info">
							<?php if(have_rows('work_info_main')):while(have_rows('work_info_main')):the_row();?>
							<?php if(get_row_layout()=='work_first_row'):?>
							<div class="work-d-info-row">
								<div class="row">
									<div class="col-md-4 col-12">
										<h3 class="font-we-sb"><?php echo get_sub_field('first_row_title');?></h3>
									</div>
									<div class="col-md-8 col-12">
										<div class="work-d-points-count">
											<?php if(have_rows('first_row_points')):while(have_rows('first_row_points')):the_row();?>
											<div class="points-count-box flex-column align-items-start text-start ">
												<h3 class=""><?php echo get_sub_field('point_count');?></h3>
												<p><?php echo get_sub_field('point_text');?></p>
											</div>
											<?php endwhile;endif;?>
										</div>
									</div>
								</div>	
							</div>
							<?php endif;?>
							<?php if(get_row_layout()=='work_second_row'):?>
							<div class="work-d-info-row">
								<div class="row">
									<div class="col-md-4 col-12">
										<h3 class="font-we-sb"><?php echo get_sub_field('second_row_title');?></h3>
									</div>
									<div class="col-md-8 col-12">
										<div class="work-d-info-p">
											<?php echo get_sub_field('second_row_text');?>
										</div>
									</div>
								</div>	
							</div>
							<?php endif;?>
							<?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>

			<section class="work-features-sec">
				<div class="container">
					<div class="work-features-top">
						<div class="section-title">
							<span class="sec-title-small"><?php echo the_field('feature_title_small');?></span>
							<h2 class="text-uppercase"><?php echo the_field('feature_uppercase_title');?></h2>
						</div>
					</div>
					<div class="work-features-bottom">
						<div class="work-features-slider">
						<?php if(have_rows('work_image_slider')):while(have_rows('work_image_slider')):the_row();?>
							<div class="work-features-slide">
								<div class="work-features-box">
									<div class="work-features-img">
										<?php $featuresliderImg = get_sub_field('work_feature_img');?>
										<img src="<?php echo $featuresliderImg['url'];?>" alt="<?php echo $featuresliderImg['alt'];?>">
									</div>
									<div class="work-features-text">
										<p><?php echo get_sub_field('work_feature_slider_text');?></p>
									</div>
								</div>
							</div>
								<?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>

			<section class="client-testimonials-sec">
				<div class="container">
					<div class="client-testimonials-main">
						<div class="client-says-main">
							<div class="quote-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
							<p><?php echo the_field('client_text');?></p>
							<div class="client-info-main">
								<div class="client-info-img">
									<?php $clientImg = get_field('client_image');?>
									<img src="<?php echo $clientImg['url'];?>" alt="<?php echo $clientImg['alt'];?>">
								</div>
								<div class="client-info">
								<?php echo the_field('client_info');?>
								</div>
							</div>
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
			<!-- Content End -->

			<?php echo do_shortcode('[custom_contact_us_section]') ;?>

<?php 
get_footer();
?>