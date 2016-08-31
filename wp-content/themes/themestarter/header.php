<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php bloginfo( 'name'); ?> |
            <?php bloginfo( 'description'); ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
    <header>

        <div class="row">
            <div class="small-12 medium-8 small-centered medium-centered columns">

                <?php $main_menu_top = array( 
                    'theme_location'=> 'main-menu', 
                    'container' => 'nav', 
                    'container_class' => 'main-menu'
                    ); ?>

                    <?php wp_nav_menu($main_menu_top); ?>


            </div>

        </div>

        <div class="main-header">
            <div class="row">
                <div class="small-12 small-centered columns">
                    <div class="intro">
                        <h3>Let's develop something</h3>
                        <h1>BETTER</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
