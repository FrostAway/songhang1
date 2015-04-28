<?php
/*
  Template Name: Tour
 */
?>

<?php get_header(); ?>

<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=tour&posts_per_page=10');
$count = 0;
?>
<div class="row sh-row">
    <div class="col-md-12 sh-col">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 sh-title-content">
                    CÁC TOUR MỚI
                </div>
            </div>
        </div>
        <div class="sh-forms-book-ticket-encircled" >

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <?php
                //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
                /*        if ($count == 3) {
                  $p3 = 'thrid';
                  $count = 0;
                  } else { $p3 = ''; } */
                ?>

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
            <?php endwhile; ?>

        </div>
    </div>
</div>


<nav>
    <?php previous_posts_link('&laquo; Mới hơn') ?>
    <?php next_posts_link('Cũ hơn &raquo;') ?>
</nav>

<?php
$wp_query = null;
$wp_query = $temp;  // Reset
?>


<?php get_footer(); ?>