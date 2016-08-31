<?php
/*
Template Name: Archive Page
*/
?>


<?php get_header(); ?>

		<div id="index">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<article class="post">
				<header>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>

			</article>

			<?php endwhile; else: ?>
				<p>No posts match your criteria, try again or go back to home page. <a href="<?php bloginfo('url'); ?>"></a></p>
			<?php endif; ?>
			
		</div> <!-- end content -->


<?php get_footer(); ?>
