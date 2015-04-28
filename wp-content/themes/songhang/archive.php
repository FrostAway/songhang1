<?php get_header(); ?>

<div class="row">
    <div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-sm-6 col-md-6 sh-post">

                    <div class="sh-thumbnail sh-post-content">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <div class="sh-title-excerpt sh-post-content">
                        <div class="sh-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="sh-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 25, '.....') ?>
                        </div>
                    </div>
                </div>

            <?php endwhile;
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>