<div class="introduction">
    <?php if(is_front_page()) : ?>

        <h1 class="title"><?php bloginfo('name'); ?></h1>
        <p class="description"><?php bloginfo('description'); ?></p>

    <?php elseif(is_tax()) : ?>

        <h1 class="title"><?php echo single_term_title(); ?></h1>

    <?php else : ?>

        <h1 class="title"><?php the_title(); ?></h1>

    <?php endif; ?>
</div>