<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cuda-wp
 */
global $cuda_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<!-- favicon --> 
	<link rel="shortcut icon" href="<?php echo ($cuda_opt['cuda_favicon_icon']['url']); ?>" >
	<?php wp_head(); ?>
	<?php if(isset($cuda_opt['cuda_custom_css'])) { ?>
	<style>
		<?php echo $cuda_opt['cuda_custom_css']; ?>
	</style>
	<?php } ?>
</head>
<body <?php body_class(); ?>>
		<?php if($cuda_opt['cuda_preloader']) { ?>
		<!-- Preloader -->
		<div class="mask"><div id="loader"></div></div>
		<!--/Preloader -->
		<?php } ?>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cuda' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div id="ccr-header" class="ccr-hbg">
				<div class="ccr-headarea">
					<div class="container">
						<div class="col-md-4">
							<div class="ccr-logo element_from_left">
								<a href="<?php echo esc_url( home_url() ); ?>">
									<?php 
									if($cuda_opt['cuda_logo_on_off']==1) { ?>
									<img class="img-responsive" src="<?php echo $cuda_opt['cuda_logo']['url']; ?>">	
									<?php }else {
										echo bloginfo('name' );;
									}?></a>
								</div><!-- /.ccr-logo -->
							</div>
							<div class="col-md-8">
								<?php if(is_front_page()) { ?>
								<div class="ccr-menu">
									<nav class="navbar navbar-default" role="navigation">
										<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<!-- Collect the nav links, forms, and other content for toggling -->


										<div class="collapse navbar-collapse navbar-ex1-collapse  element_from_right">

											<ul class="nav navbar-nav">
												<li><a href="#ccr-header">Home</a></li>
												<?php 
												$sort_section = $cuda_opt['cuda_seciton_sorter']['Enabled'];
												$service_menu = $cuda_opt['cuda_service_menu'];
												$team_menu = $cuda_opt['cuda_team_menu'];
												$skill_menu = $cuda_opt['cuda_skill_menu'];
												$portfolio_menu = $cuda_opt['cuda_portfolio_menu'];
												$about_menu = $cuda_opt['cuda_about_menu'];
												$contact_menu = $cuda_opt['cuda_contact_menu'];

												$service_id= strtolower(str_replace(' ', '_', $service_menu));
												$team_id= strtolower(str_replace(' ', '_', $team_menu));
												$skill_id= strtolower(str_replace(' ', '_', $skill_menu));
												$portfolio_id= strtolower(str_replace(' ', '_', $portfolio_menu));
												$about_id = strtolower(str_replace(' ', '_', $about_menu));
												$contact_id= strtolower(str_replace(' ', '_', $contact_menu));
												if ($sort_section): foreach ($sort_section as $key=>$value) {

													switch($key) {

														case 'service': echo "<li><a href='#$service_id'>$service_menu</a></li>";
														break;

														case 'team': echo "<li><a href='#$team_id'>$team_menu</a></li>";
														break;

														case 'skill': echo "<li><a href='#$skill_id'>$skill_menu</a></li>";
														break;

														case 'portfolio': echo "<li><a href='#$portfolio_id'>$portfolio_menu</a></li>";
														break;

														case 'about': echo "<li><a href='#$about_id'>$about_menu</a></li>";
														break;

														case 'contact': echo "<li><a href='#$contact_id'>$contact_menu</a></li>";
														break;

													}

												}

												endif;
												?>

											</ul>
										</div><!-- /.navbar-collapse -->
									</nav>
								</div>
								<?php }else{ ?>
								<div class="collapse navbar-collapse navbar-ex1-collapse  element_from_right">
									<?php cuda_nav_menu(); ?>
									<?php	} ?>
								</div><!-- /.navbar-collapse -->

								<!-- /.ccr-menu -->
							</div>
						</div>
						

					</div> 
				</div>
				<!-- /.ccr-headarea -->

			</header> <!-- /#ccr-header -->
			<!-- /header -->