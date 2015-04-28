
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php sh_entry_header(); ?>
		<?php sh_entry_meta() ?>
	</header>
	<div class="entry-content">
		<?php sh_entry_content(); ?>
		<?php ( is_single() ? sh_entry_tag() : '' ); ?>
	</div>
</article>
