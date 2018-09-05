<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>

<div class="container">
<div class="header row">
   <div class="logo">
      <a href="/"><img src="/wp-content/themes/olympus/images/shipnamewhite.png" /></a>
   </div>
   <div class="nav">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
   </div>
</div>
</div>
</head>