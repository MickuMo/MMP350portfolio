<?php get_header(); ?>

       <div class="page">
         
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="row">
                <div class="small-12 medium-8 medium-centered columns">
                    <article class="post">
                        <?php the_post_thumbnail('feature'); ?>
                       
                        <div class="content">
                        <?php the_content(); ?>
                        </div>
                    </article>
                </div>
            </div>

			<?php endwhile; else: ?>
				<p>No posts are found.</p>
			<?php endif; ?>
       
        </div><!--  end of page div -->
			

<?php get_footer(); ?>
