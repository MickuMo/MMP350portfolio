<?php get_header(); ?>

    <div id="home">

        <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="small-12 medium-6 large-4 xlarge-3 columns">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="entry-title">
                            <?php the_title(); ?>
                        </h3>
                        <div class="post-thumbnail">
                            <?php /* Start the Loop */ ?>
                            <?php the_post_thumbnail( $size, $attr ); ?>
                        </div>
                    </a>

                </div>

                <?php endwhile; else: ?>
                    <p>No posts are found.</p>
                    <?php endif; ?>
        </div>


    </div>
    <!-- end of home -->

    <?php get_footer(); ?>
