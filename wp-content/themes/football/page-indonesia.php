<?php get_header(); ?>

<?php
    $args = array(
        'post_type'      => 'indonesia',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Berita Indonesia</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>

<?php get_footer(); ?>