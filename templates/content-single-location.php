<?php while (have_posts()) : the_post(); ?>
	<section class="location-single">
		<div class="row mt-5 mb-4">

			<div class="col-8">

				<? the_content(); ?>

			</div>

			<div class="col-4">

				<?php get_template_part('templates/sections/parts/locations','address'); ?>

				<?php get_template_part('templates/sections/parts/uploads','list'); ?>

			</div>
		</div>
	</section>
<?php endwhile; ?>
