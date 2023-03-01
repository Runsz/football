<?php get_header(); ?>

<?php
    $args = array(
        'post_type'      => 'video',
    );
    $loop = new WP_Query($args); ?>
    <h1 id="Judul_page">Koleksi Video</h1>
    <main id="content-video">
        <?php while ( $loop->have_posts() ) {
            $loop->the_post();
        ?>
            <div class="isi">
                <div id="vid-thumbnail">
                    <a href=" <?php the_permalink(); ?>"><?php the_post_thumbnail('vid-thumb'); ?></a>
                </div>

                <div id="isi">
                    <h4><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
            </div>
        <?php } ?>
    </main>

<?php get_footer(); ?>