	<?php
		/**
		 * The header for our theme
		 *
		 * This is the template that displays all of the <head> section and everything up until <div id="content">
		 *
		 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		 *
		 * @package iThemer
		 */

		?>
		<!DOCTYPE html>
		<html class="no-js" <?php language_attributes(); ?>>
		    <head>
		     <meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">

			<?php wp_head(); ?>	
					
				
		    </head>
		    <body <?php body_class(); ?>>
				
				<!-- Start Header -->
		<?php if ( is_home() || is_front_page()) : ?>
				<header id="header">
		<?php else: ?>
			<header id="header" class="normal">
		<?php endif; ?>
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-12 col-xs-12">
								<!-- Logo -->
								<div class="logo">
									<?php
									if(has_custom_logo()):
										the_custom_logo(); 
									else: ?>		
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php endif; ?>
					
								</div>
								<!--/ End Logo -->
								<div class="mobile-nav"></div>
							</div>
							<div class="col-md-9 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
									<nav class="mainmenu">
										<div class="collapse navbar-collapse">
											
								<?php
										if ( has_nav_menu( 'menu-1' ) ) : 
							            wp_nav_menu( array(
							                'theme_location'    => 'menu-1',
							                'depth'             => 8,
							                'container'         => 'div',
							                'menu_class'        => 'nav navbar-nav menu',
							                'fallback_cb'       => 'ithemer_bootstrap_navwalker::fallback',
							                'walker'            => new ithemer_bootstrap_navwalker()
							            ));
							        ?>
							        <?php else : ?>
                            			<ul class="nav navbar-nav menu">
                                			<li class="menu-item">
                               					 <a href="<?php echo admin_url( 'nav-menus.php' ); ?> "> <?php esc_html_e('Add a menu','ithemer'); ?></a>
                            				</li>
                        				</ul>

                        <?php endif; ?>
											
									<?php if(get_theme_mod('ithemer_social_button_enable')): ?>
											<ul class="social-icon">
												<li><a href="#header"><i class="fa fa-plus"></i></a></li>
											</ul>
											<ul class="social">
		                                        <?php if(get_theme_mod('ithemer_facebook_url')): ?>
												<li><a href="<?php echo esc_url(get_theme_mod('ithemer_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li>
		                                        <?php endif; ?>
												<?php if(get_theme_mod('ithemer_twitter_url')): ?>
												<li><a href="<?php echo esc_url(get_theme_mod('ithemer_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li>
		                                        <?php endif; ?>
		                                        <?php if(get_theme_mod('ithemer_linkedin_url')): ?>
												<li><a href="<?php echo esc_url(get_theme_mod('ithemer_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
		                                        <?php endif; ?>
		                                        <?php if(get_theme_mod('ithemer_pinterest_url')): ?>
												<li><a href="<?php echo esc_url(get_theme_mod('ithemer_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li>
		                                        <?php endif; ?>
		                                        <?php if(get_theme_mod('ithemer_pinterest_url')): ?>
												<li><a href="<?php echo esc_url(get_theme_mod('ithemer_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
		                                        <?php endif; ?>
											</ul>
										<?php endif; ?>
										</div>
									</nav>
									<!--/ End Main Menu -->
								</div>
							</div>
						</div>
					</div>
				</header>
				<!--/ End Header -->
		<?php if ( is_home() || is_front_page()) : ?>

		<!-- Start Personal Area -->
				<section id="personal-area">
					<div class="personal-main">
						<div class="personal-single">
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<!-- Personal Text -->
										<div class="personal-text">
											<div class="my-info">
		                                        <?php if(get_theme_mod('banner_main_title')): ?>
													<h1><?php echo esc_html(get_theme_mod('banner_main_title'));  ?></h1>
													<h2 class="cd-headline clip is-full-width">
													   <?php echo esc_html(get_theme_mod('banner_pro_title'));  ?>
													   <span class="cd-words-wrapper">
														   <b class="is-visible"><?php echo esc_html(get_theme_mod('banner_career_title1'));  ?></b>
														   <b><?php echo esc_html(get_theme_mod('banner_career_title2'));  ?></b>
														   <b><?php echo esc_html(get_theme_mod('banner_career_title3'));  ?></b>
														</span>
													</h2>
													<div class="button">
														<a href="<?php echo esc_html(get_theme_mod('button_url_1'));  ?>" class="btn primary shine"><i class="fa fa-rocket"></i><?php echo esc_html(get_theme_mod('button_text_1'));  ?></a>
														<a href="<?php echo esc_html(get_theme_mod('button_url_2'));  ?>" class="btn shine"><i class="fa fa-briefcase"></i><?php echo esc_html(get_theme_mod('button_text_2'));  ?></a>
													</div>
												<?php else: ?>
													<h1><?php bloginfo('name'); ?></h1>
													<h2 class="cd-headline clip is-full-width">
												   <?php bloginfo('description');  ?>
		                                        <?php endif; ?>
											</div>
										</div>
										<!--/ End Personal Text -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!--/ End Personal Area -->
		<?php endif; ?>
		        
		 <?php if ( !is_home() && !is_front_page()) : ?>       
		<!-- Start Breadcrumbs -->
				<section id="breadcrumbs">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<?php
								if ( is_archive() ) {
								the_archive_title( '<h2 class="page-title">', '</h2>' );
													}
							else{
								echo '<h2 class="page-title">';
								echo esc_html( get_the_title() );
								echo '</h2>';
							}
							?>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
								<ul class="bread-list">
									<?php
									do_action( 'ithemer_breadcrumb' );		
								?>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Breadcrumbs -->
		<?php endif; ?>