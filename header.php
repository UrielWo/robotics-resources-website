<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Logo"></div>
  <nav class="links">
            <a href="<?php echo site_url('/tasks'); ?>">Tasks</a>
            <a href="<?php echo site_url('/articles'); ?>">Articles</a>
            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
  </nav>
</header>
<div id="content" class="site-content">
