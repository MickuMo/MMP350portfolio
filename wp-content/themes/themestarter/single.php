<?php
/*
Template Name: Single Page
*/
?>
<?php get_header(); ?>

<div class="single">
    <div class="row">
        <!-- Row for main content area -->
        <div class="small-12 columns" id="content" role="main">
    
        <!-- Start the loop to look for posts-->
            <?php while ( have_posts() ) : the_post(); ?>
                
                <h2 class="entry-title">
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
    
        </div>
    </div>
</div>

<?php get_footer(); ?>