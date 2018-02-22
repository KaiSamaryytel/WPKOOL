	<?php global $cuda_opt; ?>
	<section id="slider">
		<div class="container-full">
			<div class="slider">			
				<div id="main-slider" class="carousel slide">

					<ol class="carousel-indicators">
						<?php for($i = 0; $i< count($cuda_opt['cuda-slides']); $i++){ ?>
						<li data-target="#main-slider" data-slide-to="<?php echo $i ?>" class="<?php echo ($i==0)?'active':'';?>"></li>
						<?php } ?>
					</ol> <!-- /.carousel-indicators -->

					<!-- Carousel items -->
					<div class="carousel-inner">
						<?php $i = 0; ?>
						<?php 

						$slides = $cuda_opt['cuda-slides'];
						//$slides = array();
						foreach ($slides as $slide) {
							?>
							<div class="item <?php echo !$i ? "active":"";?>">
								
								<img src="<?php echo $slide['image'] ?>" />
								
								<h1><?php echo $slide['description'] ?></h1>
								<?php if($slide['url']) { ?>
								<a href="<?php echo $slide['url']; ?>" type="button" class="ccr-button btn btn-default element_from_bottom">WORK WITH US</a>
								<?php } ?>
								
							</div> <!--/.active /.item -->
							<?php $i = 1;?>
							<?php  } ?>
						</div> <!-- /.carousel-inner -->

						<!-- slider nav -->
						<a class="ccr-slider-control left" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="ccr-slider-control right" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>

					</div> <!-- /#main-slider -->
				</div> <!-- /.slider -->
			</div> <!-- /.container-full -->
		</section><!-- /#Slider -->
