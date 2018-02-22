<?php 
global $cuda_opt;
$contact_menu = $cuda_opt['cuda_contact_menu']; 
$contact_id= strtolower(str_replace(' ', '_', $contact_menu));
?>
<section id="<?php echo $contact_id; ?>">				
	<div id="ccr-touch">
		<div class="ccr-touch-bg">
			<div class="container">
				<div class="ccr-touch-title element_from_top">
					<h2><?php echo $cuda_opt['cuda_contact_title']; ?></h2>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
				</div>
				<!-- /.ccr-touch-title -->
				<span class="ccr-touch-slug"><?php echo $cuda_opt['cuda_contact_des']; ?></span>
				<div class="ccr-touch-form col-xs-12 col-sm-12">
					<?php dynamic_sidebar('contact' ); ?>
					
					</div>
				</div>
				<!-- /.ccr-touch-form -->
				
			</div>			
		</div>
		<!-- /#ccr-touch bg-->
	</div> 
	<!-- /ccr touch -->
</section>