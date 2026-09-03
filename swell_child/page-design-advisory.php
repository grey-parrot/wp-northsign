<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Main 
====================================================================== -->
<main class="subpage-design-advisory">
  <div class="design-advisory__container">
    <div class="design-advisory__article">

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
endif;
?>

    </div>
  </div>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

    <?php wp_footer(); ?>
  </body>
</html>