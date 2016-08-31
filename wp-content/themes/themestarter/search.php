
<?php get_header(); ?>

		<div id="search">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


				<div class="content">
					<?php the_content(); ?>
				</div>


			<?php endwhile; else: ?>
				<p>Nothing marches your criteria. Back to <a href="<?php bloginfo('url'); ?>">home</a></p>
			<?php endif; ?>
			
		</div> <!-- end content -->


<?php get_footer(); ?>
