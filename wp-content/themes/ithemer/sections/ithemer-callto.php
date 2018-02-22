<?php if(get_theme_mod('ithemer_callto_section_enable')): ?>	
	
		<!-- Start Call To Action -->
		<section id="call-action" class="section wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="call-action-main">
							<?php
								$callto_title = get_theme_mod('ithemer_callto_page_1');
								$callto_icon = get_theme_mod('ithemer_callto_icon_1');
								$queried_post = get_post($callto_title);
								$callto_text =esc_html(get_theme_mod('ithemer_callto_button_text_1')); 
								$callto_url =esc_url(get_theme_mod('ithemer_callto_button_url_1')); 
							?>
							<h2><?php echo esc_html($queried_post->post_title); ?></h2>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<div class="button">
								<a href="<?php echo esc_url($callto_url); ?>" class="btn"><i class="fa fa-address-book"></i><?php echo esc_html($callto_text); ?></a>
							<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call To Action -->

<?php endif; ?>