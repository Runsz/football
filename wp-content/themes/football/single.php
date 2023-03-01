<?php get_header(); ?>

<main id='content'>
    <?php 
        if (have_posts()) :
            while (have_posts()) : the_post()?>
            <article id="post">
                <div id="isi">
                    <h3> <a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>   
                    <p>
                        <?php the_content();?>
                    </p>
                    <p class="info-meta">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
                            <?php the_author();?>
                        </a>
                        <?php
                            echo " || ". esc_attr(get_the_date()); ?> at <?php the_time('g:i a');
                        ?>
                    </p>
                </div>
            </article>
    <?php
            endwhile;
        endif;
    ?>
</main>

<?php get_footer() ?>