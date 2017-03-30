<?php get_header(); ?>

<div class="clearfix"></div>

<section class="ah-appeal">
	<div class="container">
		<div class="row">
			<span class="ah-appeal-text2"><?php the_title(); ?></span>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ah-appeal-img">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ah-appeal-text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>

<?php get_footer(); ?>
