<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
    <title>Home Page</title>
</head>

<body <?php body_class(); ?> translate="no">

<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>">
                    <ul class="text">
                        <li>E</li>
                        <li class="ghost">l</li>
                        <li class="ghost">a</li>
                        <li class="ghost">i</li>
                        <li class="ghost">n</li>
                        <li class="ghost">e</li>
                        <li class="spaced">G</li>
                        <li class="ghost">o</li>
                        <li class="ghost">l</li>
                        <li class="ghost">u</li>
                        <li class="ghost">b</li>
                        <li class="ghost">i</li>
                        <li class="ghost">c</li>
                        <li class="ghost">s</li>
                        <li class="spaced">Z</li>
                        <li class="ghost">i</li>
                        <li class="ghost">t</li>
                        <li class="ghost">o</li>
                    </ul>
                </a>
            </div>
            <div class="navbar-right row" id="menu-bar" onclick="menu_animation()">
                <div class="col menu_container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="col">
                    <p id="menu_text">Menu</p>
                </div>
            </div>
        </div>
    </nav>
</header>


<div id="sidenav">
    <?php
        wp_nav_menu( 
            array(
                'theme_location' => 'top-menu',
                'menu' => 'menu-top-menu',
                'menu_class' => 'cross-link list-unstyled components overflow-hidden text-center',
                'link_before' => '<span>',
                'link_after' => '</span>',

            ) 
        );
    ?>
</div>

<div id="overlay" class="overlay" onclick="menu_animation()"></div>