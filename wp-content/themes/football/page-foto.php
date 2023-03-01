<?php get_header(); ?>

<?php
    $args = array(
        'post_type'      => 'foto',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php the_content(); ?>
        <?php } ?>
    </main>

<?php get_footer(); ?>