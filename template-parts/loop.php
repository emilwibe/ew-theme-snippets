<?php if(have_posts()) : ?>

    <main class="main">
  <?php while(have_posts()) : the_post(); ?>

        <article>
            <?php if(is_archive()) : ?>

            <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php endif; ?>

            <?php the_content(); ?>

        </article>
  <?php endwhile; ?>

  </main>
<?php endif; ?>