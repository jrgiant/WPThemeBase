<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require_once "util/util.php";?>
    <?php wp_head();?>
</head>
<body>
<div id="menu-bar">
  <h1>Site Title</h1>
  <button class="hamburger hamburger--collapse" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
</div>
<div class="site-title">
  <div class="filter"></div>
        <video autoplay loop muted>
            <source src="<?php echo trailingslashit(get_template_directory_uri()); ?>assets/media/Typing.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="<?php echo trailingslashit(get_template_directory_uri()); ?>assets/media/Typing.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
  <h1><?php bloginfo();?></h1>
</div>
<div class="navigation">
    <?php if (get_theme_mod('show_top_bar', 'show') === "show"): ?>
  <div class="top-bar">
    <div class="left"><?php echo get_theme_mod('top_bar_left', "<a href=\"#\">Enter information</a>"); ?></div>
    <div class="right"><?php echo get_theme_mod('top_bar_right', '<div class="button">Add a call to Action!</div>'); ?></div>
  </div>
  <?php endif;?>
  <!--./top-bar-->
  <nav>
   <?php
wp_nav_menu();
?>
  </nav>

</div>
<div class="nav-placeholder"></div>


