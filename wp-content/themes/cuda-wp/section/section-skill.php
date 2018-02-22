<?php 
global $cuda_opt;
$skill_menu = $cuda_opt['cuda_skill_menu']; 
$skill_id= strtolower(str_replace(' ', '_', $skill_menu));
?>
<section id="<?php echo $skill_id; ?>">
	<div id="ccr-skill">
		<div class="ccr-skill-bg">
			<div class="container">
				<div class="ccr-skill-title element_from_top">
					<h1><?php echo $cuda_opt['cuda_skill_title']; ?></h1>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
					<div class="ccr-skill-slug element_from_bottom">
						<p>
						<?php echo $cuda_opt['cuda_skill_des']; ?>
						</p>
					</div> <!-- /.ccr-skill-slug -->
				</div> <!-- /.ccr-skill-title -->
				<div class="ccr-skill-item">
					<div class="col-sm-3 ccr-first-skill element_from_right">
						<div class="tw-circle-chart" data-color="#30bae7" data-padding="5px" data-percent="<?php echo $cuda_opt['cuda_skill_one'] ?>"><?php echo $cuda_opt['cuda_skill_one'] ?>%</div>
						<h3><?php echo $cuda_opt['cuda_skill_one_title'] ?></h3>
					</div>	<!-- /.ccr-first-skill -->
					<div class="col-sm-3 ccr-second-skill element_from_right">
						<div class="tw-circle-chart" data-color="#d74680" data-percent="<?php echo $cuda_opt['cuda_skill_two'] ?>"><?php echo $cuda_opt['cuda_skill_two'] ?>%</div>
						<h3><?php echo $cuda_opt['cuda_skill_two_title'] ?></h3>

					</div> <!-- /.ccr-second-skill -->
					<div class="col-sm-3 ccr-third-skill element_from_left">
						<div class="tw-circle-chart" data-color="#15c7a8" data-percent="<?php echo $cuda_opt['cuda_skill_three'] ?>"><?php echo $cuda_opt['cuda_skill_three'] ?>%</div>
						<h3><?php echo $cuda_opt['cuda_skill_three_title'] ?></h3>
					</div><!-- /.ccr-third-skill -->
					<div class="col-sm-3 ccr-fourth-skill element_from_left">
						<div class="tw-circle-chart" data-color="#eb7d4b" data-percent="<?php echo $cuda_opt['cuda_skill_four'] ?>"><?php echo $cuda_opt['cuda_skill_four'] ?>%</div>
						<h3><?php echo $cuda_opt['cuda_skill_four_title'] ?></h3>
					</div><!-- /.ccr-fourth-skill -->
				</div>
				<!-- /.ccr-skill-item -->
			</div>
		</div>	<!-- /#ccr-skill-bg -->
	</div><!-- /#ccr-skill -->
</section>