<?php if(get_theme_mod('ithemer_counter_section_enable')==1): ?>	
		<!-- Start Count Down -->
		<section id="countdown" class="section" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row">
				<?php 
						
						$counter_icon[0]=get_theme_mod('ithemer_counter_icon_1');
						$counter_numb[0]=get_theme_mod('ithemer_counter_count_1');
						$counter_field[0]=get_theme_mod('ithemer_counter_field_1');
						$counter_icon[1]=get_theme_mod('ithemer_counter_icon_2');
						$counter_numb[1]=get_theme_mod('ithemer_counter_count_2');
						$counter_field[1]=get_theme_mod('ithemer_counter_field_2');
						$counter_icon[2]=get_theme_mod('ithemer_counter_icon_3');
						$counter_numb[2]=get_theme_mod('ithemer_counter_count_3');
						$counter_field[2]=get_theme_mod('ithemer_counter_field_3');
						$counter_icon[3]=get_theme_mod('ithemer_counter_icon_4');
						$counter_numb[3]=get_theme_mod('ithemer_counter_count_4');
						$counter_field[3]=get_theme_mod('ithemer_counter_field_4');

					 ?>
					 <?php for($i=0;$i<=3; $i++) {  ?>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
						<!-- Single Count -->
						<div class="single-count">
							<i class="<?php echo esc_attr($counter_icon[$i]); ?>"></i>
							<h2><?php echo esc_attr($counter_numb[$i]); ?></h2>
							<p><?php echo esc_html($counter_field[$i]);?></p>
						</div>
						<!--/ End Single Count -->
					</div>

					<?php } ?>
					
				</div>
			</div>
		</section>
		<!--/ End Count Down -->
<?php endif; ?>