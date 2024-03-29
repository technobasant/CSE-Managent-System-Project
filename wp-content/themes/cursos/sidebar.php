<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Cursos
 */
?>
<div class="sidebar-container">
	<?php if ( is_active_sidebar('blog-sidebar') ) : ?>
		<?php dynamic_sidebar('blog-sidebar'); ?>
	<?php else : ?>	
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Recent Posts', "cursos" ); ?></h3>
			<ul><?php wp_get_archives('type=postbypost&limit=10'); ?></ul>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Pages', "cursos" ); ?></h3>
			<ul><?php wp_list_pages('title_li='); ?></ul>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Tag Cloud', "cursos" ); ?></h3>
			<div class="tagcloud"><?php wp_tag_cloud(); ?></div>
		</aside>
		<aside class="widget">
			<h3 class="widget-title"><?php _e( 'Categories', "cursos" ); ?></h3>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</aside>		
	<?php endif; ?>
</div>