<?php get_header(); ?>

<?php
    $isi = array(
        'post_type' => array('dunia','indonesia','inggris','piala-dunia','spanyol'),
        'posts_per_page' => 4,
        'orderby' => 'date'
    );
    $author_post = new WP_Query($isi);?>
    <main id="slider-post">
        <?php while ( $author_post->have_posts() ) {
            $author_post->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


<?php
    $args = array(
        'post_type'      => 'inggris',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Liga Inggris</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


<?php
    $args = array(
        'post_type'      => 'spanyol',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Liga Spanyol</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


<?php
    $args = array(
        'post_type'      => 'video',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Berita Video</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


<?php
    $args = array(
        'post_type'      => 'indonesia',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Indonesia</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


    <?php
    $args = array(
        'post_type'      => 'dunia',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Dunia</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <?php get_template_part('content') ?>
        <?php } ?>
    </main>


<?php
    $args = array(
        'post_type'      => 'foto',
    );
    $loop = new WP_Query($args); ?>
    <main id="content">
        <h1>Foto Pilihan</h1>
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <div class="galeri">
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </main>


<?php get_footer(); ?>