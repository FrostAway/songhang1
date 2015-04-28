
<?php get_header(); ?>

<div class="content">

    <section id="main-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="entry-title">
                    <?php the_title(); ?>
                </h1>

                <?php
                echo '<div class="entry-meta">';

                // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
//                printf(__('<span class="author">Đăng bởi %1$s</span>', 'sh'), get_the_author());

                printf(__('<span class="date-published">Ngày đăng: %1$s</span>', 'sh'), get_the_date());

                printf(__('<span class="category">  %1$s</span>', 'sh'), get_the_category_list(', '));

                // Hiển thị số đếm lượt bình luận
               
                echo '</div>';
                ?>

                <div class="tour-info">
                    <table class="table">
                        <tr>
                            <th>Giá: </th>
                            <td><?php echo get_post_meta(get_the_ID(), 'price', true); ?></td>
                        </tr>
                        <tr>
                            <th>Thời gian: </th>
                            <td><?php echo get_post_meta(get_the_ID(), 'datetime', true) ?></td>
                        </tr>
                        <tr>
                            <th>Số chỗ còn lại: </th>
                            <td><?php echo get_post_meta(get_the_ID(), 'seat', true); ?></td>
                        </tr>
                    </table>
                </div>
        
                <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php get_template_part('content', 'none'); ?>
<?php endif; ?>
    </section>

    <div id="reviews">
        
    </div>

</div>

        <?php get_footer(); ?>