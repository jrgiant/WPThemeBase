<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require_once("util/util.php"); ?>
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
  <h1><?php bloginfo();?></h1>
</div>
<div class="navigation">
    <?php if (get_theme_mod( 'show_top_bar', 'show' ) === "show"): ?>
  <div class="top-bar">
    <div class="left"><?php echo get_theme_mod( 'top_bar_left', "Enter information" );?></div>
    <div class="right">Item 2</div>
  </div>
  <?php endif; ?>
  <!--./top-bar-->
  <nav>
   <?php 
    wp_nav_menu();
   ?>
  </nav>
  
</div>
<div class="nav-placeholder"></div>


