<?php if(have_posts()) : ?>

    <main class="main">
  <?php while(have_posts()) : the_post(); ?>

        <article>
    <?php if(is_home() || is_category() || is_tag() || is_search()) : ?>

            <h2><a href="<?php echo get_the_permalink(); ?>" class="link article"><?php the_title(); ?></a></h2>

            <div class="tags"><?php the_tags(); ?></div>

            <?php the_excerpt(); ?>

    <?php else : ?>

            <?php the_content(); ?>

    <?php endif; ?>

        </article>
  <?php endwhile; ?>
  <?php numeric_posts_pagination (); ?>

  </main>
<?php endif; ?>