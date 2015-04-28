<?php
/*
	Template Name: News
*/
?>

<?php get_header(); ?>

<div class="row sh-row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="col-md-3">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			
		<?php endwhile;
		endif; ?>

</div>
 
<?php get_footer(); ?>