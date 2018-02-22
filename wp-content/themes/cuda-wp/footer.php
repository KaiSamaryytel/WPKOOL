<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cuda-wp
 */
global $cuda_opt;
?>

<footer id="ccr-footer">
	<div class="ccr-footer-bg">
		<ul class="ccr-footer-menu">
			<li><a href="<?php echo $cuda_opt['cuda_facebook']; ?>">Facebook</a></li>
			<li><a href="<?php echo $cuda_opt['cuda_twitter']; ?>">Twitter</a></li>
			<li><a href="<?php echo $cuda_opt['cuda_google_plus']; ?>">Google+</a></li>
			<li><a href="<?php echo $cuda_opt['cuda_linkedin']; ?>">Linkedin</a></li>
			<li><a href="<?php echo $cuda_opt['cuda_behance']; ?>">Behance</a></li>
			<li><a href="<?php echo $cuda_opt['cuda_dribble']; ?>">Dribbble</a></li>
		</ul>
	</div>
	<!-- /#ccr-footer -->
	<div class="copyrights">
		<div class="container">
			<div class="col-sm-4">Copyright 2014 © <strong><?php echo bloginfo('name' ); ?></strong>, All Rights Reserved
			</div>
			<!-- Credit -->
			<div class="col-sm-8"><div class="pull-right">Cuda <a href="http://www.codexcoder.com/products/cuda-free-one-page-wordpress-theme/" target="_blank">Free One page WordPress Theme</a> Designed and Developed by <a href="http://www.codexcoder.com">CodexCoder</a> | Powered By <a href="http://wordpress.org" rel="nofollow" >WordPress</a></div></div>	
		</div>
	</div>
</footer> 
<!-- /footer -->
<a href="#ccr-header" id="ccr-back-top" title="Back to Top" style="display: inline;">Back to Top</a>
<!--========================================end===========================-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
  chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  <?php wp_footer(); ?>
  <script>
  	<?php if($cuda_opt['cuda_custom_ga']){ 
  		echo $cuda_opt['cuda_custom_ga'];
  	} ?></script>
  </body>
  </html>