<?php get_header(); ?>

  <section class="l-wrapper m row lg-col-66-33 md-col-75-25 sm-col-100">
    <?php get_template_part('template-parts/loop'); ?>

      <?php get_template_part('template-parts/widgetarea', 'prim_widgets'); ?>
  </section><!--/.l-wrapper.s-->

<?php get_footer(); ?>