<?php get_header(); ?>

<div class="row sh-row">
    <div class="col-md-12 sh-col">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 sh-title-content">
                    <?php single_term_title() ?>
                </div>
            </div>
        </div>
        <div class="sh-forms-book-ticket-encircled" >

            <?php if(have_posts()): while (have_posts()) : the_post(); ?>

                <div class="row sh-forms-book-ticket sh-tour-hot" id="tour-<?php the_ID(); ?>">
                    <div class="col-sm-3 col-md-3 sh-tour-hot-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="sh-tour-hot-title">
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        </div>
                        <div class="sh-tour-hot-excerpt">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div>
                            <div class="sh-tour-hot-price-register">
                                <?php
                                $regular_price = get_post_meta($post->ID, 'price', true);
                                $sale_price = get_post_meta($post->ID, 'price_sale', true);
                                if ($sale_price == '' || $sale_price == 0) {
                                    ?>
                                    <div class="sh-tour-hot-price-sale">
                                        <?php echo $regular_price; ?>
                                    </div>
                                <?php  } else {  ?>
                                <div class="sh-tour-hot-price">
                                    <?php echo $regular_price; ?>
                                </div>
                                <div class="sh-tour-hot-price-sale">
                                    <?php echo $sale_price; ?>
                                </div>
                                <?php } ?>

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="sh-tour-hot-info">
                            <div>Ngày khởi hành</div>
                            <div class="sh-tour-hot-info-db">
                                <?php echo get_post_meta($post->ID, 'datetime', true); ?>
                            </div>
                        </div>
                        <div class="sh-tour-hot-info">
                            <div>Số chỗ còn lại</div>
                            <div class="sh-tour-hot-info-db">
                                <?php echo get_post_meta($post->ID, 'seat', true); ?>
                            </div>
                        </div>
                        <div class="sh-tour-hot-info">
                                <a class="sh-tour-hot-btn-register read-more" href="<?php the_permalink() ?>">Chi tiết</a>
                                <a class="sh-tour-hot-btn-register" href="<?php echo get_page_link(391).'/?tour_reg='.  get_the_ID() ?>">Đăng kí</a>
                               
                            </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
            <h5>Không có bài viết nào!</h5>
            <?php endif; ?>

        </div>
    </div>
</div>


<nav>
    <?php previous_posts_link('&laquo; Mới hơn') ?>
    <?php next_posts_link('Cũ hơn &raquo;') ?>
</nav>


<?php get_footer(); ?>