<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php get_template_part('template-parts/hero', 'gradient'); ?>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <script>
    document.body.classList.add('enhanced');
  </script>
  <div class="edge-top"></div>

  <header class="header primary l-wrapper fw">
    <div class="l-wrapper xl">
      <h2 class="logo"><a href="<?php echo get_site_url(); ?>"><span> &lt;/&gt; </span> <?php bloginfo('name'); ?></a></h2>

      <?php get_template_part('template-parts/nav', 'primary'); ?>

      <?php echo get_search_form(); ?>
    </div>
  </header>

  <section class="hero">
    <div id="particles-js"></div>

    <div class="l-wrapper xl row lg-col-50 md-col-50 sm-col-100">
      <div>
        <div class="introduction">
          <?php if(is_front_page()) : ?>

          <h1 class="title"><?php bloginfo('name'); ?></h1>
          <p class="description"><?php bloginfo('description'); ?></p>
          
          <?php else : ?>

          <h1 class="title"><?php the_title(); ?></h1>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section><!--/.hero-->