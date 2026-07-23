<?php get_header(); ?>

<h1>Hello World!</h1>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>