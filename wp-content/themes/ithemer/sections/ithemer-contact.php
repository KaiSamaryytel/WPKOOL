<?php if(get_theme_mod('ithemer_contact_section_enable')): ?>
		
		<!-- Start Contact -->
		<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<?php
								$contact_title_id = get_theme_mod('ithemer_contact_page_title');
								$contact_icon = esc_html(get_theme_mod('ithemer_contact_icon_title'));
								$queried_post = get_post($contact_title_id);
								
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?><i class="<?php echo esc_attr($contact_icon); ?>"></i></h2>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
							
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Contact Form -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.4s">
						<form class="form">
								<?php if (is_active_sidebar( 'contact-left' )):
								 dynamic_sidebar( 'contact-left' ); 
								else: 
								  echo do_shortcode(get_theme_mod('ithemer_contact_form_code')); 
								endif; ?>							
						</form>
					</div>
					<!--/ End Contact Form -->
					<!-- Contact Address -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.8s">
						<div class="contact">
							<?php if (is_active_sidebar( 'contact-right' )):
								 dynamic_sidebar( 'contact-right' ); 
								else: ?>
							<?php if(get_theme_mod('ithemer_contact_phone_numbers')): ?>
								<div class="single-address">
								<i class="fa fa-phone"></i> 
								<div class="title">
									<h4><?php echo esc_html(get_theme_mod('ithemer_contact_phone_title')); ?></h4>
									<p><?php echo esc_html(get_theme_mod('ithemer_contact_phone_numbers')); ?></p>
								</div>
							</div>
							<?php endif; ?>
							<?php if(get_theme_mod('ithemer_contact_email_address')): ?>
							<div class="single-address">
								<i class="fa fa-envelope"></i> 
								<div class="title">
									<h4><?php echo esc_html(get_theme_mod('ithemer_contact_email_title')); ?></h4>
									<p><?php echo esc_html(get_theme_mod('ithemer_contact_email_address')); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if(get_theme_mod('ithemer_contact_location_address')): ?>
							<div class="single-address">
								<i class="fa fa-map"></i> 
								<div class="title">
									<h4><?php echo esc_html(get_theme_mod('ithemer_contact_location_title')); ?></h4>
									<p><?php echo esc_html(get_theme_mod('ithemer_contact_location_address')); ?></p>
								</div>
							</div>
						<?php endif; ?>

							<?php	endif; ?>
						</div>
					</div>
					<!--/ End Contact Address -->
				</div>
			</div>
		</section>
		<!--/ End Contact -->
<?php endif; ?>
		