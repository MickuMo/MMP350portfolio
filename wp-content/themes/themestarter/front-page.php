<?php get_header(); ?>
    <div id="home">
           
           <?php $count = 0; ?>
           
           <?php if(have_posts()) : while($featured->have_posts()) : $featured->the_posts(); ?>
              <?php if ($count % 3 == 0) : ?>
                  <div class="row">
                <?php endif; ?>
                
               <div class="small-12 medium-4 large-4 columns">
                   <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail(); ?>
                       <div class="post-title">
                       <?php the_title(); ?>
                       </div>
                    </a>
                </div>
                <?php if ($count % 3 == 2) : ?>
                    </div>
                <?php endif; ?>
                <?php $count = $count + 1; ?>
                
            <?php endwhile; ?>
            <?php endif; wp_reset_postdate(); ?>
            
    </div>
    <!-- end of wrapper -->

<?php get_footer(); ?>