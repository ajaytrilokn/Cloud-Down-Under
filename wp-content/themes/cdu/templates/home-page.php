<?php
/*
Template Name:Home Page
*/
get_header();
$videoPlay = get_field('video_play_btn_image','option');
?>

			<!-- Content Start -->
 
			<section class="banner-sec theme-bg-color" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">	
								<div class="banner-text-wrap ">
									<div class="banner-text">
										<?php the_content();?>
										<div class="banner-rating-main">
											<div class="banner-rating">
												<div class="b_rating_text d-flex align-items-center">
													<svg id="Group_52" data-name="Group 52" xmlns="http://www.w3.org/2000/svg" width="16.205" height="15.511" viewBox="0 0 16.205 15.511"> <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M8.675.539,6.7,4.549l-4.425.645a.97.97,0,0,0-.536,1.654l3.2,3.12L4.18,14.375A.969.969,0,0,0,5.585,15.4l3.959-2.081L13.5,15.4a.969.969,0,0,0,1.405-1.021l-.757-4.407,3.2-3.12a.97.97,0,0,0-.536-1.654l-4.425-.645L10.413.539a.97.97,0,0,0-1.739,0Z" transform="translate(-1.441 0.001)" fill="#f05d27"/></svg>
													<span class="text d-inline-block ms-2">4.8</span>
												</div>
												<div class="banner-rating-logo">
													<svg id="clutch-co-vector-logo" xmlns="http://www.w3.org/2000/svg" width="86.771" height="24.643" viewBox="0 0 86.771 24.643"> <path id="Path_2418" data-name="Path 2418" d="M177,235.9h3.991v24.643H177Z" transform="translate(-154.44 -235.9)"/> <path id="Path_2419" data-name="Path 2419" d="M235.933,299.951a3.87,3.87,0,0,1-4.165,4.165c-2.43,0-2.777-2.256-2.777-3.471V291.1H225v9.371a7.328,7.328,0,0,0,2.082,5.553,6.282,6.282,0,0,0,4.686,1.735,6.06,6.06,0,0,0,4.165-1.388v1.388h3.992V291.1h-3.992Z" transform="translate(-195.498 -283.117)"/> <path id="Path_2420" data-name="Path 2420" d="M341.142,249.1H337.15v6.074H334.2v3.818h2.95v12.842h3.991V258.992h2.95v-3.818h-2.95Z" transform="translate(-288.906 -247.191)"/> <path id="Path_2421" data-name="Path 2421" d="M419.2,300.674a5.479,5.479,0,0,1-3.3,1.215,4.6,4.6,0,0,1-4.686-4.859,4.464,4.464,0,0,1,4.686-4.686,4.581,4.581,0,0,1,3.3,1.215l.521.521,2.777-2.6-.694-.521a8.9,8.9,0,0,0-5.9-2.256,8.5,8.5,0,0,0,0,17.007,8.9,8.9,0,0,0,5.9-2.256l.694-.521-2.777-2.777Z" transform="translate(-351.52 -281.064)"/> <path id="Path_2422" data-name="Path 2422" d="M537.148,245.271a5.508,5.508,0,0,0-4.339-1.735,5.219,5.219,0,0,0-3.818,1.388V235.9H525v24.643h3.992v-9.2c0-3.818,2.6-4.165,3.644-4.165,2.43,0,2.256,2.256,2.256,3.471v9.718h3.991v-9.545C538.883,248.569,538.363,246.486,537.148,245.271Z" transform="translate(-452.112 -235.9)"/> <ellipse id="Ellipse_48" data-name="Ellipse 48" cx="2.777" cy="2.777" rx="2.777" ry="2.777" transform="translate(61.434 13.363)" fill="#ef4335"/> <path id="Path_2423" data-name="Path 2423" d="M38.007,259.576a8.138,8.138,0,0,1-5.727,2.256c-4.339,0-7.462-3.471-7.462-8.157s3.124-8.156,7.636-8.156a8.166,8.166,0,0,1,5.727,2.43l.521.521,2.6-2.6-.521-.521a11.687,11.687,0,0,0-8.33-3.471C25.859,241.7,21,246.908,21,253.676s4.859,11.974,11.28,11.974a11.4,11.4,0,0,0,8.33-3.471l.521-.521-2.6-2.6Z" transform="translate(-21 -241.007)"/> </svg>
												</div>
											</div>
											<div class="banner-rating">
												<div class="b_rating_text d-flex align-items-center">
													<svg id="Group_52" data-name="Group 52" xmlns="http://www.w3.org/2000/svg" width="16.205" height="15.511" viewBox="0 0 16.205 15.511"> <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M8.675.539,6.7,4.549l-4.425.645a.97.97,0,0,0-.536,1.654l3.2,3.12L4.18,14.375A.969.969,0,0,0,5.585,15.4l3.959-2.081L13.5,15.4a.969.969,0,0,0,1.405-1.021l-.757-4.407,3.2-3.12a.97.97,0,0,0-.536-1.654l-4.425-.645L10.413.539a.97.97,0,0,0-1.739,0Z" transform="translate(-1.441 0.001)" fill="#f05d27"/></svg>
													<span class="text d-inline-block ms-2">4.8</span>
												</div>
												<div class="banner-rating-logo">
													<svg xmlns="http://www.w3.org/2000/svg" width="161.193" height="24.028" viewBox="0 0 161.193 24.028"> <g id="Group_4332" data-name="Group 4332" transform="translate(-703 -7881)"> <g id="goodfirms-white-logo-_11_" data-name="goodfirms-white-logo-(11)" transform="translate(703 7881)"> <path id="Shape" d="M9.878,8.45S8.544,8.317,8.544,9.506v5.28h8.81v1.585a.757.757,0,0,1-.8.792H8.544v6.865h9.611s5.819-.9,5.873-6.865V8.45ZM23.76,0H6.407C.133,1.478,0,6.627,0,6.627v17.4H6.675V8.186A1.627,1.627,0,0,1,8.009,6.6H23.761V0ZM46.669,19.048c-.458.306-.8.53-1.035.673a18.528,18.528,0,0,1-2.428,1.264,7.865,7.865,0,0,1-2.946.673,10.618,10.618,0,0,1-7.506-2.774,9.092,9.092,0,0,1-3-6.993,10.147,10.147,0,0,1,2.707-7.056,8.542,8.542,0,0,1,6.589-2.977,11.081,11.081,0,0,1,3.423.572,9.472,9.472,0,0,1,3.8,2.181L44.539,6.528a6.683,6.683,0,0,0-2.807-1.57,9.778,9.778,0,0,0-2.767-.366,5.733,5.733,0,0,0-4.558,2.181,7.945,7.945,0,0,0-1.831,5.24,6.585,6.585,0,0,0,2.089,5,7.409,7.409,0,0,0,5.315,2,5.428,5.428,0,0,0,2.747-.835c.777-.592,1.175-.878,1.195-.9v-4.18H38.109l.835-2.61h7.724Zm17.558-5.1a7.254,7.254,0,0,1-2.15,5.24,7.3,7.3,0,0,1-10.451.041,7.082,7.082,0,0,1-2.19-5.261,7.547,7.547,0,0,1,2.09-5.3,6.685,6.685,0,0,1,5.116-2.243,7.338,7.338,0,0,1,7.585,7.524Zm-2.728.041a4.784,4.784,0,0,0-1.373-3.467,4.508,4.508,0,0,0-3.4-1.428,4.232,4.232,0,0,0-3.245,1.469,4.828,4.828,0,0,0-1.334,3.364A4.724,4.724,0,0,0,53.5,17.315a4.466,4.466,0,0,0,3.364,1.427,4.377,4.377,0,0,0,3.246-1.407A4.578,4.578,0,0,0,61.5,13.991Zm20.046-.041a7.254,7.254,0,0,1-2.15,5.24,7.3,7.3,0,0,1-10.451.041,7.087,7.087,0,0,1-2.19-5.261,7.547,7.547,0,0,1,2.09-5.3A6.686,6.686,0,0,1,73.96,6.426a7.338,7.338,0,0,1,7.585,7.524Zm-2.728.041a4.784,4.784,0,0,0-1.373-3.467A4.508,4.508,0,0,0,74.04,9.1,4.232,4.232,0,0,0,70.8,10.565a4.828,4.828,0,0,0-1.334,3.364,4.72,4.72,0,0,0,1.355,3.386,4.462,4.462,0,0,0,3.364,1.427,4.377,4.377,0,0,0,3.245-1.407,4.578,4.578,0,0,0,1.394-3.343ZM97.57,21.005l-2.508.388V18.966l-.538.611a6.586,6.586,0,0,1-1.593,1.1,6.435,6.435,0,0,1-2.727.592,6.56,6.56,0,0,1-4.977-2.163A7.286,7.286,0,0,1,83.2,13.95a7.63,7.63,0,0,1,2.01-5.3,6.372,6.372,0,0,1,4.917-2.2A7.055,7.055,0,0,1,93.031,7a4.932,4.932,0,0,1,1.493,1.041c.14.183.279.387.419.57V2.245l2.666-.388Zm-2.349-6.872a4.907,4.907,0,0,0-1.453-3.609,4.5,4.5,0,0,0-3.324-1.489,4.329,4.329,0,0,0-3.364,1.407,4.79,4.79,0,0,0-1.215,3.283,5.2,5.2,0,0,0,1.254,3.588A4.069,4.069,0,0,0,90.3,18.721a4.95,4.95,0,0,0,3.384-1.3,4.244,4.244,0,0,0,1.533-3.284ZM111.644,4.9h-7.465V9.974h5.792v2.61h-5.792v8.4l-2.906.428V2.265h9.793Zm5.992-1.49-1.792,2.263-1.712-2.263,1.811-2.243Zm-.538,17.6-2.667.367V7.2l2.667-.407V21.006ZM129.142,6.65l-1.254,2.895a3.518,3.518,0,0,0-.5-.04,5.089,5.089,0,0,0-.777.061,3.056,3.056,0,0,0-.835.286,3.256,3.256,0,0,0-1.453,1.57,6.35,6.35,0,0,0-.7,2.917v6.648l-2.666.428V7.2l2.468-.449V9.708c.318-.51.657-1.019.975-1.549A3.946,3.946,0,0,1,126,7.016a12.53,12.53,0,0,1,3.145-.366Zm19.865,14.355-2.667.388V11.666a2.721,2.721,0,0,0-.6-1.958,2.378,2.378,0,0,0-1.772-.612,2.35,2.35,0,0,0-2.129,1.162,3.25,3.25,0,0,0-.5,1.672v9.054l-2.667.49V11.727A2.957,2.957,0,0,0,138.1,9.77a2,2,0,0,0-1.593-.674h-.259a2.12,2.12,0,0,0-2.031,1.183,4.751,4.751,0,0,0-.477,2.263v8.442l-2.767.49V7.2l2.487-.428V8.587a5.622,5.622,0,0,1,.817-1.019,3.527,3.527,0,0,1,2.487-1,4.378,4.378,0,0,1,2.368.51,4.391,4.391,0,0,1,1.334,1.672,4.373,4.373,0,0,1,3.922-2.182,4.289,4.289,0,0,1,3.642,1.55,6.13,6.13,0,0,1,.976,3.772Zm12.186-4.3a4.179,4.179,0,0,1-1.373,3.222,4.861,4.861,0,0,1-3.465,1.264,5.6,5.6,0,0,1-2.847-.735,5.323,5.323,0,0,1-1.911-1.692l1.872-1.672a3.684,3.684,0,0,0,.378.489,3.393,3.393,0,0,0,2.508,1.081,2.284,2.284,0,0,0,1.593-.53,1.832,1.832,0,0,0,.578-1.469q0-1.069-1.373-1.468-2.719-.826-2.927-.918a5.066,5.066,0,0,1-1.812-1.387,3.994,3.994,0,0,1-.636-2.365,3.972,3.972,0,0,1,1.354-3.058,4.59,4.59,0,0,1,3.2-1.2,5.42,5.42,0,0,1,2.609.633A4.45,4.45,0,0,1,160.655,8.3l-1.593,1.732a5.847,5.847,0,0,0-.776-.652,3.225,3.225,0,0,0-1.831-.673,2.392,2.392,0,0,0-1.374.366,1.571,1.571,0,0,0-.637,1.347,1.386,1.386,0,0,0,.618,1.264,8.572,8.572,0,0,0,2.309.733,5.441,5.441,0,0,1,2.767,1.469A3.734,3.734,0,0,1,161.193,16.7Z" transform="translate(0)"/> </g> </g> </svg>
												</div>
											</div>
											<div class="banner-rating">
												<div class="b_rating_text d-flex align-items-center">
													<svg id="Group_52" data-name="Group 52" xmlns="http://www.w3.org/2000/svg" width="16.205" height="15.511" viewBox="0 0 16.205 15.511"> <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M8.675.539,6.7,4.549l-4.425.645a.97.97,0,0,0-.536,1.654l3.2,3.12L4.18,14.375A.969.969,0,0,0,5.585,15.4l3.959-2.081L13.5,15.4a.969.969,0,0,0,1.405-1.021l-.757-4.407,3.2-3.12a.97.97,0,0,0-.536-1.654l-4.425-.645L10.413.539a.97.97,0,0,0-1.739,0Z" transform="translate(-1.441 0.001)" fill="#f05d27"/></svg>
													<span class="text d-inline-block ms-2">4.8</span>
												</div>
												<div class="banner-rating-logo">
													<svg xmlns="http://www.w3.org/2000/svg" width="86.771" height="28.323" viewBox="0 0 86.771 28.323"> <g id="Group_4331" data-name="Group 4331" transform="translate(-1255 -7879.838)"> <g id="Group_4330" data-name="Group 4330" transform="translate(1255 7879.838)"> <path id="Path_2424" data-name="Path 2424" d="M10.684,0h.772a10.529,10.529,0,0,1,7.207,3.043c-.7.713-1.412,1.4-2.1,2.111A7.874,7.874,0,0,0,3.346,9.9a8.1,8.1,0,0,0,1.762,6.26,7.792,7.792,0,0,0,5.678,2.8,7.558,7.558,0,0,0,5.649-1.936A6.166,6.166,0,0,0,18.312,13c-2.417,0-4.833.015-7.25,0V10H21.239a10.317,10.317,0,0,1-2.679,9.143,9.95,9.95,0,0,1-6.187,2.781,11.364,11.364,0,0,1-6.508-1.281,11.2,11.2,0,0,1-5.2-5.925A10.734,10.734,0,0,1,.594,7.454a11.084,11.084,0,0,1,4-5.314A11.43,11.43,0,0,1,10.684,0Z" transform="translate(0.003)"/> <path id="Path_2425" data-name="Path 2425" d="M474.4,5.2h3.116V25.99c-1.034,0-2.082.015-3.116-.015C474.414,19.06,474.4,12.13,474.4,5.2Z" transform="translate(-405.333 -4.443)"/> <path id="Path_2426" data-name="Path 2426" d="M159.993,53.942a7.315,7.315,0,0,1,5.59,1.194,6.838,6.838,0,0,1,2.752,4.368,7.04,7.04,0,0,1-7.4,8.444,7.085,7.085,0,0,1-5.3-2.839,7.278,7.278,0,0,1-.961-6.61,6.909,6.909,0,0,1,5.314-4.557m.437,2.766a3.914,3.914,0,0,0-2.038,1.3,4.618,4.618,0,0,0,.233,6.013,3.877,3.877,0,0,0,3.465,1.077A3.921,3.921,0,0,0,164.8,63.1a4.6,4.6,0,0,0-.786-5.474A3.928,3.928,0,0,0,160.43,56.708Z" transform="translate(-131.821 -45.978)"/> <path id="Path_2427" data-name="Path 2427" d="M266.02,53.936a7.078,7.078,0,0,1,6.93,11.4,7.2,7.2,0,0,1-11.283-.233,7.347,7.347,0,0,1-.917-6.755,6.915,6.915,0,0,1,5.27-4.411m.437,2.766a3.981,3.981,0,0,0-2.038,1.281,4.624,4.624,0,0,0,.16,5.955,3.9,3.9,0,0,0,3.552,1.15,3.994,3.994,0,0,0,2.708-1.995,4.629,4.629,0,0,0-.815-5.489A3.9,3.9,0,0,0,266.456,56.7Z" transform="translate(-222.415 -45.972)"/> <path id="Path_2428" data-name="Path 2428" d="M369.374,54.778a5.952,5.952,0,0,1,5.707-.437,5.438,5.438,0,0,1,1.485,1.092c.015-.393,0-.8.015-1.208.975.015,1.951,0,2.941.015V67.08a7.673,7.673,0,0,1-1.907,5.4A6.94,6.94,0,0,1,371.63,74.2a6.77,6.77,0,0,1-5.1-4.062c.873-.422,1.791-.757,2.693-1.15a4,4,0,0,0,2.839,2.446,3.773,3.773,0,0,0,3.64-1.165,5.822,5.822,0,0,0,.859-3.975,5.168,5.168,0,0,1-2.373,1.456,6.4,6.4,0,0,1-5.809-1.5,7.167,7.167,0,0,1,.99-11.472m3.014,1.864a3.83,3.83,0,0,0-2.286,1.325,4.645,4.645,0,0,0,.015,5.838,3.809,3.809,0,0,0,3.276,1.339,3.7,3.7,0,0,0,2.781-1.849,4.914,4.914,0,0,0-.495-5.5A3.583,3.583,0,0,0,372.387,56.641Z" transform="translate(-312.68 -45.97)"/> <path id="Path_2429" data-name="Path 2429" d="M508.545,55.467a6.571,6.571,0,0,1,6.682-1.325,7.521,7.521,0,0,1,4.164,4.906c-3.159,1.31-6.3,2.606-9.463,3.916a3.754,3.754,0,0,0,2.009,1.893,4.078,4.078,0,0,0,3.844-.553,6.2,6.2,0,0,0,1.077-1.15c.8.539,1.6,1.063,2.4,1.6a7.128,7.128,0,0,1-11.254.713,7.463,7.463,0,0,1,.539-10M510.1,58.16a4.156,4.156,0,0,0-.684,2.446q3.167-1.31,6.333-2.635a2.619,2.619,0,0,0-2.053-1.441A3.72,3.72,0,0,0,510.1,58.16Z" transform="translate(-432.62 -45.916)"/> </g> </g> </svg>
												</div>
											</div>
										</div>
									</div>
									<div class="banner-btn-main d-flex flex-wrap">
										<div class="btn-wp">
				                        	<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow me-3 mb-3"><?php echo the_field('discuss_project_btn','option');?></a>
				                        </div>
				                        <div class="btn-wp">	
											<a href="<?php echo the_field('apply_now_btn_url','option');?>" class="btn btn-with-arrow border-btn me-3 mb-3"><?php echo the_field('apply_now_btn','option');?></a>
				                        </div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">	
								<div class="banner-sec-video">
									<div class="banner-v-img">
										<?php $bannerVimg = get_field('banner_v_image');											  
										?>
										<img src="<?php echo $bannerVimg['url'];?>" alt="<?php echo $bannerVimg['alt'];?>">
										<a href="<?php echo the_field('banner_play_btn_url');?>" data-fancybox class="play-link" ><img src="<?php echo $videoPlay['url'];?>" alt="<?php echo $videoPlay['alt'];?>"></a>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<section class="trusted-companies theme-bg-color">
				<div class="container-fuild">
					<div class="trusted-companies-main">
						<div class="clients-logo-main">
							<div class="clients-logo-inner">
								<?php if(have_rows('trusted_client_logos')):
								while(have_rows('trusted_client_logos')):the_row();
								$TCLogo = get_sub_field('trusted_client_logo');
								?>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo $TCLogo['url'];?>" alt="<?php echo $TCLogo['alt'];?>">
									</div>
								</div>
								<?php endwhile;endif;?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="our-work-sec">
				<div class="container">
					<div class="our-work-top">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"></span><?php echo the_field('our_work_title_small','option');?></span>
									<h2 class="text-uppercase"><?php echo the_field('our_work_title_uppercase','option');?></h2>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
						</div>
					</div>
					<div class="our-work-bottom">
						<div class="h-our-work-slider">
							<?php if(have_rows('our_works','option')):
							while(have_rows('our_works','option')):the_row();
							$worklogo = get_sub_field('our_work_left_logo','option');
							?>
							<div class="our-work-slide">
								<div class="our-work-slide-row">
									<div class="our-work-left" style="background:<?php echo get_sub_field('background','option');?>">
										<div class="row">
											<div class="col-md-5 col-sm-12 col-12">
												<div class="our-work-left-info">
													<div class="our-work-left-top">
														<img src="<?php echo $worklogo['url'];?>" alt="<?php echo $worklogo['alt'];?>">
													</div>
													<div class="our-work-left-bottom">
														<?php echo get_sub_field('our_work_left_text','option');?>
													</div>
												</div>
											</div>
											<div class="col-md-7 col-sm-12 col-12">
												<div class="our-work-img">
													<?php $mainworkImg = get_sub_field('our_work_img','option');?>
													<img src="<?php echo $mainworkImg['url'];?>" alt="<?php echo $mainworkImg['alt'];?>">
												</div>
											</div>
										</div>
									</div>
									<div class="our-work-right">
										<div class="our-work-right-top">
											<h3><?php echo get_sub_field('our_work_right_title','option');?></h3>
											<?php if(have_rows('our_work_right_services','option')):
											while(have_rows('our_work_right_services','option')):the_row();?>
											<div class="service-type">
												<h4><?php echo get_sub_field('service_title','option');?></h4>
												<ul>
													<?php if(have_rows('services','option')):while(have_rows('services','option')):the_row();?>
													<li><span><?php echo get_sub_field('service_name','option');?></span></li>
													<?php endwhile;endif;?>
												</ul>
											</div>
											<?php endwhile;endif;?>
										</div>
										<div class="our-work-right-bottom">
											<h5 class="font-we-sb mb-3"><?php echo get_sub_field('our_work_right_bottom_text','option');?></h5>
											<div class="cta-main">
												<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; endif;?>
						</div>
					</div>
				</div>
			</section>

			<section class="process-sec process-section">
				<div class="container">
					<div class="process-top">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('process_small_title','option');?></span>
									<h2 class="text-uppercase"><?php echo the_field('process_title_uppercase','option');?></h2>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
						</div>
					</div>

				<process-section class="the-process">
		            <section class="the-process__step-images" aria-hidden="true">
						<?php if(have_rows('process_images','option')):
							while(have_rows('process_images','option')):the_row();
							$processImg = get_sub_field('process_img','option');
							?>							
		              	<div class="the-process__step-image" data-step-image>
		                	<img src="<?php echo $processImg['url'];?>" class="attachment-full size-full" alt="<?php echo $processImg['alt'];?>"/>
		              	</div>
						<?php endwhile;endif;?>
		            </section>
            		<section class="the-process__steps the-process__steps--in-page">
						<?php if(have_rows('process_content','option')):while(have_rows('process_content','option')):the_row();?>
              			<article class="the-process__step" data-is-active data-is-toggled="true" data-step>
			                <div class="the-process__step-circle">
				                <svg height="48" width="48" class="the-process__step-circle-anim">
				                    <circle class="circle" cx="50%" cy="50%" r="50%" stroke="#40eb98" stroke-width="1" fill-opacity="0" />
				                </svg>
				                <a href="#discovery" data-step-link><?php echo get_sub_field('steps','option');?></a>
			                </div>
			                <h2 class="the-process__step-heading">
			                  <a href="#discovery" data-step-link><?php echo get_sub_field('heading','option');?></a>
			                </h2>
                			<div class="the-process__step-contents">
                  				<div class="the-process__step-description">
			                    	<?php if(have_rows('step_description','option')):while(have_rows('step_description','option')):the_row();?>
									<?php echo get_sub_field('step_title');?>
			                    	<ul>
										<?php if(have_rows('step_lists','option')):while(have_rows('step_lists','option')):the_row();?>
					                    <li><?php echo get_sub_field('step_list','option');?></li>
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

			<section class="services-sec theme-bg-color">
				<div class="container">
					<div class="services-top">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('service_small_title');?></span>
									<h2 class="text-uppercase"><?php echo the_field('service_title_uppercase');?></h2>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-end align-self-center">
								<div class="cta-main">
									<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
								</div>

							</div>
						</div>
					</div>
					<div class="services-tab-main">
    <?php if (have_rows('service_tabs')) : ?>
        <div class="tech-stack-row">
            <div class="tech-stack-tabs home-left-tabs">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
                    $sid = 0;
                    while (have_rows('service_tabs')) : the_row(); ?>
                        <button class="nav-link <?php echo $sid == 0 ? 'active' : ''; ?>" id="v-pills-<?php echo $sid; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $sid; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $sid; ?>" aria-selected="<?php echo $sid == 0 ? 'true' : 'false'; ?>">
                            <span class="tab-title-text"><?php echo get_sub_field('tab_title'); ?></span>
                            <span class="tab-title-icon">
                                <?php $tabImg = get_sub_field('tab_image'); ?>
                                <img src="<?php echo esc_url($tabImg['url']); ?>" alt="<?php echo esc_attr($tabImg['alt']); ?>">
                            </span>
                        </button>
                        <?php $sid++;
                    endwhile; ?>
                </div>
            </div>
            <div class="ts-tab-content">
                <div class="tab-content" id="v-pills-tabContent">
                    <?php
                    $sid = 0;
                    while (have_rows('service_tabs')) : the_row(); ?>
                        <div class="tab-pane fade <?php echo $sid == 0 ? 'show active' : ''; ?>" id="v-pills-<?php echo $sid; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $sid; ?>-tab">
                            <div class="ts-tab-content-main">
                                <?php if (have_rows('tab_content')) : ?>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <?php
                                        $nid = 0;
                                        while (have_rows('tab_content')) : the_row(); ?>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link <?php echo $nid == 0 ? 'active' : ''; ?>" id="services-tab-<?php echo $nid; ?>" data-bs-toggle="tab" href="#services-tabpanel-<?php echo $nid; ?>" role="tab" aria-controls="services-tabpanel-<?php echo $nid; ?>" aria-selected="<?php echo $nid == 0 ? 'true' : 'false'; ?>"><?php echo get_sub_field('nested_tab_title'); ?></a>
                                            </li>
                                            <?php $nid++;
                                        endwhile; ?>
                                    </ul>
                                    <div class="tab-content pt-5" id="tab-content">
                                        <?php
                                        $nid = 0;
                                        while (have_rows('tab_content')) : the_row(); ?>
                                            <div class="tab-pane <?php echo $nid == 0 ? 'active' : ''; ?>" id="services-tabpanel-<?php echo $nid; ?>" role="tabpanel" aria-labelledby="services-tab-<?php echo $nid; ?>">
                                                <div class="tech-stack-tabrow">
                                                    <div class="tech-stack-col">
                                                        <ul>
                                                            <?php if (have_rows('nested_tab_content')) :
                                                                while (have_rows('nested_tab_content')) : the_row();
                                                                    $s_img = get_sub_field('nested_tab_image'); ?>
                                                                    <li>
                                                                        <a href="#" class="ts-icon-text-link">
                                                                            <div class="ts-icon"><img src="<?php echo esc_url($s_img['url']); ?>" alt="<?php echo esc_attr($s_img['alt']); ?>"> </div>
                                                                            <div class="ts-text"><span><?php echo get_sub_field('nested_content_text'); ?></span></div>
                                                                        </a>
                                                                    </li>
                                                                <?php endwhile;
                                                            endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $nid++;
                                        endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $sid++;
                    endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
	<div class="service-bottom-text text-center mt-5">
							<p class="mb-0"><?php echo the_field('service_below_text');?></p>
						</div>
</div>

				</div>
			</section>

			<section class="why-cdu-sec">
				<div class="container">
					<div class="why-cdu-top">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-12 col-12">
								<div class="section-title">
									<span class="sec-title-small"><?php echo the_field('why_cdu_small_title');?></span>
									<h2 class="text-uppercase"><?php echo the_field('why_cdu_uppercase_title');?></h2>
									
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 col-12 text-end align-self-center">
								<div class="cta-main">
									<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow"><?php echo the_field('discuss_project_btn','option');?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="points-count-main">
						<?php if(have_rows('point_counts')):while(have_rows('point_counts')):the_row();?>
						<div class="points-count-box">
							<h3 class=""><?php echo get_sub_field('number');?></h3>
							<p><?php echo get_sub_field('text');?></p>
						</div>
						<?php endwhile;endif;?>
					</div>
				</div>
				<div class="video-why-cdu-wrap">
					<div class="container">
						<div class="why-cdu-sec-video">
							<div class="why-cdu-video-main">
								<?php $videoBG = get_field('video_bg_image');
								
								?>
								<img src="<?php echo $videoBG['url'];?>" alt="<?php echo $videoBG['alt'];?>">
								<a href="<?php bloginfo('template_url'); ?>/assets/video/dummy_video.mp4" data-fancybox class="play-link" ><img src ="<?php echo $videoPlay['url'];?>" alt="<?php echo $videoPlay['alt'];?>"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="tc-logos-main">
					<div class="container">
						<div class="tc-logos-row">
						<?php if(have_rows('tc_logos')):while(have_rows('tc_logos')):the_row();
						$TCImg = get_sub_field('tc_logo');
						?>
							<div class="tc-logos">
								<img src="<?php echo $TCImg['url'];?>" alt="<?php echo $TCImg['alt'];?>">
							</div>
						<?php endwhile;endif;?>
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
		</div>

<?php

get_footer();

?>