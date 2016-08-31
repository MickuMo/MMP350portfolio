<?php get_header(); ?>
   
    <main class="small-12 large-8 columns">
        <h2><?php echo single_cat_title(); ?></h2>
        
        <?php if (is_category('Website')) : ?>
            <p>Some previous web development work.</p>
        <?php elseif (is_category('Graphic')) :?>
            <p>Some of my graphic designs</p>
        <?php endif; ?>
        
        <?php if(have_post()) : while($featured->have_posts()) : $featured->the_post(); ?>
        
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
        
    </main>

<?php get_footer(); ?>