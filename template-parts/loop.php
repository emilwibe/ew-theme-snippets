<?php if(have_posts()) : ?>

    <main class="main">
  <?php while(have_posts()) : the_post(); ?>

        <article>
            <?php if(is_archive() || is_home()) : ?>

            <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_excerpt(); ?>

            <?php else : ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <?php endif; ?>

            <?php //the_content(); ?>

        </article>
  <?php endwhile; ?>

  </main>
<?php endif; ?>