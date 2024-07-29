<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Cloud Down Under</title>
		<?php wp_head() ;?>
		<!-- =================== /WEB CSS EOC ==================== -->
		<style type="text/css">
			.show_hide {display:none; }
		</style>
	</head>
	<body id="home" <?php body_class('homePage'); ?>>
		
	<!-- ====== /WRAPPER BOC ====== -->
		<div class="page-wrapper ">
		  	<!-- header start -->
		  	<header class="site-header">
			    <div class="header-main nav-area">
			      	<div class="container">
			      		<div class="header-inner-main">
				          	<div class="navbar-container">
					            <nav class="navbar navbar-dark navbar-expand-lg">
					                <div class="header-logo">
					                		<?php 
											if ( function_exists( 'the_custom_logo' ) ){
												the_custom_logo();
												} ;?>
					              	</div>
					              	<div class="header-inner d-flex">
						                <div class="header-right">
						                	<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                </button>

						                    <div class="collapse header-menu navbar-collapse " id="navbarNavDropdown">
						                      <!-- <div class="header-menu-inner">
											  <?php
												wp_nav_menu(array(
													'theme_location'=>'header-menu',
													'container' => false,
													'menu_class' => 'navbar-nav',
													'add_li_class'  => 'nav-item'
												))
												;?>
						                        <div class="header-btn-main">
						                        	<a href="<?php echo the_field('discuss_project_btn_url','option');?>" class="btn btn-with-arrow">
						                        		<?php echo the_field('discuss_project_btn','option');?>
						                        	</a>
													<a href="<?php echo the_field('apply_now_btn_url','option');?>" class="btn btn-with-arrow border-btn"><?php echo the_field('apply_now_btn','option');?></a>
						                        </div>
						                      </div> -->
											  <div class="header-menu-inner">
												    <ul class="navbar-nav">
														<li class="nav-item sm_menu_main ">
															<div class="main-menu" id="menu_servece1">
															  	 <a href="http://localhost/cdu/service/">Services</a>
															  <button class="dropdown-click collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servmenu_collapse1"
																aria-expanded="false" aria-controls="servmenu_collapse1">
																<i class="fa fa-angle-down"></i>
															  </button>
															</div>
															<div id="servmenu_collapse1" class="collapse sdropdown-wp" aria-labelledby="menu_servece1">
															  	<div class="sdropdown-main accordion">
																  	<div class="sdropdown-row" id="inner_menu_servece1">
																  		<div class="sdropdown-col">

																  			<div class="sdropdown-header">
																		    	<span class="sdropdown-icon">
																		    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-design.svg">
																		    	</span> 
																		    	<span class="sdropdown-text">Design</span>
																  			</div>
																  			<button class="dropdown-click collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inner_servmenu_collapse1" aria-expanded="false" aria-controls="inner_servmenu_collapse1">
																  				<div class="sdropdown-header">
																			    	<span class="sdropdown-icon">
																			    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-design.svg">
																			    	</span> 
																			    	<span class="sdropdown-text">Design</span>
																	  			</div>
																  				<i class="fa fa-angle-down"></i> 
																  			</button>
																  			<div id="inner_servmenu_collapse1" class="collapse innder-sdropdown-wp" aria-labelledby="inner_menu_servece1">
																			  	<ul class="dropdown-ulmenu">
																				  	<li class="sub-menu-link"><a href="#">Mobile App Design</a></li>
																				  	<li class="sub-menu-link"><a href="#">Responsive Web Design</a></li>
																				  	<li class="sub-menu-link"><a href="#">Graphic Design</a></li>
																				  	<li class="sub-menu-link"><a href="#">Character Design</a></li>
																				  	<li class="sub-menu-link"><a href="#">3D Game Modelling</a></li>
																				  	<li class="sub-menu-link"><a href="#">Logo Design</a></li>
																				  	<li class="sub-menu-link"><a href="#">Figma,XD to HTML Development</a></li>
																				</ul>		
																			</div>	
																  		</div>
																  		<div class="sdropdown-col">
																  			<div class="sdropdown-header">
																		    	<span class="sdropdown-icon">
																		    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-build.svg">
																		    	</span> 
																		    	<span class="sdropdown-text">Build</span> 
																  			</div>
																  			<button class="dropdown-click collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inner_servmenu_collapse2" aria-expanded="false" aria-controls="inner_servmenu_collapse2">
																  				<div class="sdropdown-header">
																			    	<span class="sdropdown-icon">
																			    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-build.svg">
																			    	</span> 
																			    	<span class="sdropdown-text">Build</span>
																	  			</div>
																  				<i class="fa fa-angle-down"></i> 
																  			</button>
																  			<div id="inner_servmenu_collapse2" class="collapse innder-sdropdown-wp" aria-labelledby="inner_menu_servece1">
																			  	<ul class="dropdown-ulmenu">
																				  	<li class="sub-menu-link"><a href="#">Mobile App Development</a></li>
																				  	<li class="sub-menu-link"><a href="#">Cross Platform Apps</a></li>
																				  	<li class="sub-menu-link"><a href="#">Frontend Development</a></li>
																				  	<li class="sub-menu-link"><a href="#">PHP Development</a></li>
																				  	<li class="sub-menu-link"><a href="#">eCommerce & CMS  Development</a></li>
																				  	<li class="sub-menu-link"><a href="#">Trending Technologies</a></li>
																				  	<li class="sub-menu-link"><a href="#">Data Analytics & Visualization</a></li>
																				  	<li class="sub-menu-link"><a href="#">Microsoft Technologies.</a></li>
																				</ul>
																			</div>	
																  		</div>
																  		<div class="sdropdown-col">
																  			<div class="sdropdown-header">
																		    	<span class="sdropdown-icon">
																		    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-support.svg">
																		    	</span> 
																		    	<span class="sdropdown-text">Support</span> 
																  			</div>
																  			<button class="dropdown-click collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inner_servmenu_collapse3" aria-expanded="false" aria-controls="inner_servmenu_collapse3">
																  				<div class="sdropdown-header">
																			    	<span class="sdropdown-icon">
																			    		<img src="<?php echo bloginfo('template_url');?>/assets/images/services-icon/icon-support.svg">
																			    	</span> 
																			    	<span class="sdropdown-text">Support</span>
																	  			</div>
																  				<i class="fa fa-angle-down"></i> 
																  			</button>
																  			<div id="inner_servmenu_collapse3" class="collapse innder-sdropdown-wp" aria-labelledby="inner_menu_servece1">
																			  	<ul class="dropdown-ulmenu">
																				  <li class="sub-menu-link"><a href="#">QA and Testing</a></li>
																				  <li class="sub-menu-link"><a href="#">Maintenance and Support</a></li>
																				  <li class="sub-menu-link"><a href="#">Digital Marketing</a></li>
																				</ul>
																			</div>
																  		</div>
																  	</div>
															  	</div>
															</div>
														</li>
														<!-- <li class="nav-item"><a href="#">Services</a></li> -->
														<li class="nav-item"><a href="http://localhost/cdu/our-work/">Work</a> </li>
														<li class="nav-item"><a href="http://localhost/cdu/about-us/">About Us</a></li>
														<li class="nav-item"><a href="http://localhost/cdu/career/">Career </a></li>
														<li class="nav-item"><a href="http://localhost/cdu/blog/">Insights</a></li>
														<li class="nav-item"><a href="#contact_us_form">Contact Us</a></li>
													</ul>

												    <div class="header-btn-main">
												    	<a href="#contact_us_form" class="btn btn-with-arrow">
												    		Discuss your project
												    	</a>
														<a href="tel:1300 699 571" class="btn btn-with-arrow border-btn">Call Us Now </a>
												    </div>


												    <div class="header-address">
												    	<span>Level 7/757 Ann St, Fortitude Valley QLD 4006</span>
												    </div>
												</div>	
						                    </div>
						                </div>
						            </div>
					            </nav>
				            </div>
			            </div>
			        </div>
			    </div>
		  	</header> 
			<!-- header End -->
