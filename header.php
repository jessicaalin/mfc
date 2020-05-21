<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- following is not optimal for SEO -->
  <title><?php bloginfo('name') ?></title>
  <!-- wordpress gets to have the final word to add any extra code -->
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
  <div class="container">
    <!-- site header --> 
    <header class="site-header">
      <h1>
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      </h1>
      <h5><?php bloginfo('description'); ?></h5>
    </header>
    <!-- /site header -->
  