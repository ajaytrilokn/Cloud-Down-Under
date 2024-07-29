<?php
get_header();
?>

      <section class="banner-sec blog-details-b-sec white-bg-color  banner-height-auto" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="banner-links-main">
						<?php if (function_exists('custom_page_breadcrumbs')) custom_page_breadcrumbs(); ?>
						</div>
						<div class="blog-header-row">
							<div class="banner-text-wrap ">
								<div class="banner-text">
									<div class="banner-heading-wrap">
										<h1 class="banner-heading mb-4 font-we-sb">
                      <?php echo get_the_title(); ?></h1>
										<div class="blog--date">
											<span>By <?php the_author(); ?></span>
											<span class="dots"></span>
											<span><?php the_time('j F, Y'); ?></span>
											<span class="dots"></span>
											<span><?php echo custom_reading_time(); ?></span>
										</div>
									</div>
								</div>
								<div class="blog-header-img">
								<?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<section class="blog-details-sec">
				<div class="container">
					<div class="blog-details-row">
						<div class="about-cdu-left">
							<div class="about-cdu-box">
								<div class="about-cdu-box-top">
									<div class="about-cdu-logo">
										<a href="http://localhost/cdu/about-us/">
					                		<svg xmlns="http://www.w3.org/2000/svg" width="99.537" height="63.253" viewBox="0 0 99.537 63.253"> <g id="cdu_logo" transform="translate(-38 258.353)"> <path id="Path_77" data-name="Path 77" d="M249-258.121a76.765,76.765,0,0,0,1.112,8.383c1.438,7.163,4.07,12.725,7.6,16.062,1.926,1.818,3.174,2.5,7.705,4.26,8.465,3.31,11.069,4.5,12.155,5.562a7.614,7.614,0,0,1,2.36,7.081c-.434,1.655-3.934,7.3-10.256,16.523a53.279,53.279,0,0,0-3.039,4.667c0,.353,1.764.624,2.632.407,1.085-.271,1.411-.6,5.372-5.7,9.5-12.236,14.651-19.507,15.6-22,2.116-5.589,1.031-10.581-3.2-14.732-2.035-2.008-2.333-2.2-10.988-6.62-8.139-4.151-23.116-12.046-25.883-13.647C249.19-258.447,249-258.474,249-258.121Z" transform="translate(-153.753 0)" fill="#fcbc14"/> <g id="Group_68" data-name="Group 68" transform="translate(38 -229.466)"> <path id="Path_78" data-name="Path 78" d="M56.717-151.533A5.091,5.091,0,0,0,53-146.351c0,3.907,2.686,5.779,7.922,5.508,2.93-.136,4.612-.9,5.372-2.415.922-1.791.841-1.872-1.764-1.872-1.357,0-2.306.109-2.306.271,0,.678-1.112,1.357-2.252,1.357-1.736,0-2.5-.9-2.5-2.9,0-1.3.109-1.574.76-2.143a2.742,2.742,0,0,1,3.446-.109,1.8,1.8,0,0,1,.543.814c0,.163.95.271,2.306.271,2.55,0,2.686-.109,1.9-1.6a4.965,4.965,0,0,0-3.391-2.442A16.467,16.467,0,0,0,56.717-151.533Z" transform="translate(-48.93 151.88)" fill="#fff"/> <path id="Path_79" data-name="Path 79" d="M153.8-151.442a6.046,6.046,0,0,0-2.008,1,6.141,6.141,0,0,0-1.194,6.62c1.085,2.388,3.283,3.283,7.515,3.066,3.825-.19,5.616-1.438,6.023-4.205.461-2.984-.461-5.155-2.632-6.132A15.911,15.911,0,0,0,153.8-151.442Zm5.372,3.012c.57.543.678.922.678,2.17,0,2.062-.733,2.849-2.659,2.849-1.872,0-2.632-.841-2.632-2.9,0-1.3.109-1.574.76-2.143A2.991,2.991,0,0,1,159.167-148.43Z" transform="translate(-119.691 151.789)" fill="#fff"/> <path id="Path_80" data-name="Path 80" d="M110-145.782v5.291h10.31v-2.984H114.1l-.081-3.744-.081-3.717-1.953-.081L110-151.1Z" transform="translate(-90.466 151.312)" fill="#fff"/> <path id="Path_81" data-name="Path 81" d="M207-147.085c0,4.5.244,5.318,1.953,6.24,1.329.705,6.973.705,8.438-.027,1.709-.841,1.953-1.628,1.953-6.132v-3.934l-1.953-.081-1.926-.081-.109,3.69c-.081,3.283-.136,3.744-.6,4.1a3.215,3.215,0,0,1-3.093-.054c-.57-.38-.6-.6-.6-4.07v-3.636H207Z" transform="translate(-161.148 151.312)" fill="#fff"/> <path id="Path_82" data-name="Path 82" d="M259-145.855v5.345l5.1-.109c4.477-.081,5.182-.136,6-.624,1.736-1.031,2.062-1.764,2.062-4.612,0-2.93-.353-3.69-2.2-4.612-.922-.461-1.709-.543-6-.624L259-151.2Zm8.275-1.953c.6.516.733.841.733,1.953,0,1.926-.814,2.577-3.2,2.577H263.07v-5.155h1.736C266.244-148.433,266.705-148.324,267.275-147.809Z" transform="translate(-199.04 151.385)" fill="#fff"/> <path id="Path_83" data-name="Path 83" d="M134.21-108.438c-2.306.76-3.31,2.36-3.31,5.209,0,2.415.76,3.8,2.6,4.721,1.221.6,1.682.678,4.477.678,2.686,0,3.283-.081,4.26-.6,2.089-1.112,2.957-2.9,2.713-5.535A4.579,4.579,0,0,0,142.539-108c-1-.57-1.574-.678-4.151-.733A14.69,14.69,0,0,0,134.21-108.438Zm5.4,2.6c.678.38,1.194,2.143.977,3.364a2.561,2.561,0,0,1-2.795,2.062c-1.764,0-2.523-.841-2.523-2.849,0-2.035.76-2.849,2.577-2.849A5.187,5.187,0,0,1,139.609-105.834Z" transform="translate(-105.695 120.452)" fill="#fff"/> <path id="Path_84" data-name="Path 84" d="M74-102.855v5.345l4.965-.109c5.508-.136,6.457-.38,7.6-1.953.515-.733.6-1.194.6-3.337,0-2.795-.353-3.554-2.062-4.558-.814-.488-1.519-.543-6-.624L74-108.2Zm8.275-1.981a2.045,2.045,0,0,1,.733,1.736c.027,2.116-.841,2.822-3.473,2.822H78.07v-5.155h1.736C81.244-105.433,81.705-105.324,82.275-104.836Z" transform="translate(-64.233 120.051)" fill="#fff"/> <path id="Path_85" data-name="Path 85" d="M189-107.747c0,.19.651,2.55,1.438,5.236l1.438,4.884h4.043l.705-2.849.705-2.849.3,1.085c.163.6.488,1.9.76,2.9l.434,1.845h2.008c1.655,0,2.008-.081,2.116-.488.95-3.147,2.876-9.849,2.876-9.957a7.1,7.1,0,0,0-1.981-.136H201.86l-.651,3.174-.651,3.2-.787-3.2-.814-3.2-1.655.081-1.655.081-.705,2.984c-.38,1.628-.787,2.794-.868,2.577s-.353-1.384-.6-2.577-.515-2.388-.6-2.659c-.109-.38-.434-.461-2.008-.461C189.543-108.073,189-107.964,189-107.747Z" transform="translate(-148.032 119.978)" fill="#fff"/> <path id="Path_86" data-name="Path 86" d="M259-102.709v5.291h3.771l.081-2.93.081-2.9,2.17,2.849,2.171,2.849,2.252.081,2.225.081V-108H267.98l-.081,2.9-.081,2.93L265.7-105.1l-2.116-2.9H259Z" transform="translate(-199.04 119.905)" fill="#fff"/> <path id="Path_87" data-name="Path 87" d="M38-61.175c0,4.639.244,5.345,2.116,6.267,1.764.841,6.4.9,8.031.081,1.981-1,2.2-1.519,2.279-6.132L50.507-65h-4.1v3.337c0,3.69-.217,4.368-1.574,4.667a3.091,3.091,0,0,1-2.55-.76,20.614,20.614,0,0,1-.217-3.8V-65H38Z" transform="translate(-38 88.572)" fill="#fff"/> <path id="Path_88" data-name="Path 88" d="M94-59.845v5.155h4.043l.081-2.767.081-2.767,2.035,2.767,2.035,2.74,2.388.027h2.36V-65H102.98l-.081,2.767-.081,2.795-1.981-2.795L98.829-65H94Z" transform="translate(-78.807 88.572)" fill="#fff"/> <path id="Path_89" data-name="Path 89" d="M153-60.018v5.182h4.938c4.45,0,5.046-.054,6.1-.57,1.6-.76,2.252-2.062,2.252-4.422,0-2.333-.6-3.771-1.872-4.558-.922-.57-1.329-.624-6.186-.705L153-65.2Zm8.248-2.062a3.43,3.43,0,0,1,.651,3.12c-.3,1.112-1.465,1.682-3.473,1.682H157.07v-5.155h1.845A5.258,5.258,0,0,1,161.248-62.08Z" transform="translate(-121.799 88.717)" fill="#fff"/> <path id="Path_90" data-name="Path 90" d="M212-59.845v5.155h10.852v-2.442H216.07v-1.329l3.2-.081,3.174-.081v-2.442l-3.174-.081-3.2-.081v-1.329h6.783V-65H212Z" transform="translate(-164.792 88.572)" fill="#fff"/> <path id="Path_91" data-name="Path 91" d="M261-59.845v5.155h4.043l.081-1.574.081-1.546h1.682a5.331,5.331,0,0,1,1.872.217,3.7,3.7,0,0,1,.38,1.492l.136,1.275,2.225.081,2.225.081-.271-.9a9.29,9.29,0,0,1-.244-2.035,2.333,2.333,0,0,0-.461-1.628c-.461-.461-.461-.515.136-1.085a2.164,2.164,0,0,0,.6-1.709c0-2.686-.733-2.984-7.325-2.984H261Zm8.085-1.655c.136.868-.326,1.112-2.306,1.112H265.07v-1.926l1.981.081C268.868-62.151,269-62.1,269.085-61.5Z" transform="translate(-200.498 88.572)" fill="#fff"/> </g> </g> </svg>
					          </a>
									</div>
									<div class="about-cdu-info">
										<h3><?php echo the_field('about_title','option');?></h3>
										<p><?php echo the_field('about_text','option');?></p>
										<a href="<?php echo the_field('learn_more_btn_url','option');?>" class="learn-more-link text-underline"><?php echo the_field('learn_more_btn_text','option');?></a>
									</div>
								</div>	
								<div class="share-article-main">
									<h3>Share this Article</h3>
									<ul class="social-link-wp">
										<li>
											<a href="#">
												<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"> <g id="facebook" transform="translate(-177 -2059)"> <circle id="Ellipse_329" data-name="Ellipse 329" cx="28.5" cy="28.5" r="28.5" transform="translate(177 2059)" fill="#f4f4f4"/> <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M13.414,13.267,14.069,9h-4.1V6.229A2.134,2.134,0,0,1,12.38,3.923h1.862V.288A22.707,22.707,0,0,0,10.936,0C7.564,0,5.359,2.044,5.359,5.745V9H1.609v4.269H5.359V23.586H9.973V13.267Z" transform="translate(197.391 2076)"/> </g> </svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"> <g id="twitter" transform="translate(-252 -2059)"> <circle id="Ellipse_330" data-name="Ellipse 330" cx="28.5" cy="28.5" r="28.5" transform="translate(252 2059)" fill="#f4f4f4"/> <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M26.055,9.259c.018.258.018.516.018.774,0,7.868-5.989,16.934-16.934,16.934A16.819,16.819,0,0,1,0,24.295a12.313,12.313,0,0,0,1.437.074,11.92,11.92,0,0,0,7.389-2.543A5.962,5.962,0,0,1,3.261,17.7a7.505,7.505,0,0,0,1.124.092,6.3,6.3,0,0,0,1.566-.2,5.953,5.953,0,0,1-4.773-5.841v-.074a5.994,5.994,0,0,0,2.69.755,5.961,5.961,0,0,1-1.843-7.96A16.918,16.918,0,0,0,14.3,10.7a6.719,6.719,0,0,1-.147-1.364,5.957,5.957,0,0,1,10.3-4.072,11.718,11.718,0,0,0,3.777-1.437A5.936,5.936,0,0,1,25.613,7.1a11.932,11.932,0,0,0,3.427-.921,12.794,12.794,0,0,1-2.985,3.077Z" transform="translate(266 2072.619)"/> </g> </svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"> <g id="linkdein" transform="translate(-327 -2059)"> <circle id="Ellipse_331" data-name="Ellipse 331" cx="28.5" cy="28.5" r="28.5" transform="translate(327 2059)" fill="#f4f4f4"/> <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M4.685,20.932H.346V6.957h4.34ZM2.513,5.051A2.525,2.525,0,1,1,5.026,2.514,2.534,2.534,0,0,1,2.513,5.051ZM20.927,20.932H16.6v-6.8c0-1.621-.033-3.7-2.256-3.7-2.256,0-2.6,1.761-2.6,3.584v6.919H7.4V6.957h4.162V8.863h.061a4.56,4.56,0,0,1,4.106-2.257c4.392,0,5.2,2.892,5.2,6.649v7.676Z" transform="translate(345 2076.999)"/> </g> </svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"> <g id="link" transform="translate(-401 -2059)"> <circle id="Ellipse_332" data-name="Ellipse 332" cx="28.5" cy="28.5" r="28.5" transform="translate(401 2059)" fill="#f4f4f4"/> <g id="Icon_feather-link-2" data-name="Icon feather-link-2" transform="translate(414.5 2070.5)"> <path id="Path_2637" data-name="Path 2637" d="M18.681,10.5h3.682a6.136,6.136,0,1,1,0,12.272H18.681m-7.363,0H7.636a6.136,6.136,0,0,1,0-12.272h3.682" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> <path id="Path_2638" data-name="Path 2638" d="M12,18h9.818" transform="translate(-1.909 -1.364)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> </g> </g> </svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="blog-details-main">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</section>

			<section class="blog-page-sec see-more-blogs">
				<div class="container">
					<div class="blog-page-row">
						<div class="blog-page-lists w-100">
							<div class="all-insights-main">
								<div class="see-more-blogs-top">
									<div class="row">
										<div class="col-lg-9 col-md-9 col-sm-12 col-12">
											<div class="section-title">
												<h2 class="text-uppercase">See more Insights like this</h2>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-12 text-end align-self-center">
											<div class="cta-main d-md-block d-none">
												<a href="#" class="btn btn-with-arrow border-btn">See ALL</a>
											</div>
										</div>
									</div>
								</div>

								<div class="all-insights-row">
                <?php
							$args_sidebar = array(
								'post_type' => 'post',
								'posts_per_page' => 3,
								'order' => 'DESC'
							);

							$query_sidebar = new WP_Query($args_sidebar);

							if ($query_sidebar->have_posts()) :
								while ($query_sidebar->have_posts()) : $query_sidebar->the_post();
							?>
									<div class="blog--col">
										<div class="blog--img">
											<a href="<?php the_permalink(); ?>" class="blog-img-link">
											<?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
											</a>
										</div>
										<div class="blog--info">
											<div class="blog--date">
												<span>By <?php the_author(); ?></span>
												<span class="dots"></span>
												<span><?php the_time('j F, Y'); ?></span>
											</div>
											<div class="blog--title">
												<a href="<?php the_permalink(); ?>"><h4><?php echo get_the_title();?></h4></a>
											</div>
										</div>
									</div>
                  <?php
								endwhile;
								wp_reset_postdata(); 
							endif;
							?>
								</div>

								<div class="d-md-none">
									<div class="cta-main mt-4">
										<a href="#" class="btn btn-with-arrow border-btn">See ALL</a>
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