<?php get_header(); ?>

<?php 
	$page_id = get_the_ID();
	$page_data = get_page($page_id);
?>

<?php if( ! empty($page_data)) : ?>

<div class="row sh-row">
	<div class="col-md-12">
        <section id="main-content" class="main-content">
			<h1> <?php echo ($page_data->post_title); ?></h1>
			<div class="sh-page-content"> <?php echo ($page_data->post_content); ?></div>
        </section>
	</div>
</div>

<?php endif; ?>

<?php get_footer(); ?>