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
						                      <div class="header-menu-inner">
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


						                        <!-- <div class="header-address">
						                        	<span>Level 7/757 Ann St, Fortitude Valley QLD 4006</span>
						                        </div> -->

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
