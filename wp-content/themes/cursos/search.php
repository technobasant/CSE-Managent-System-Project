<?php
/**
 * The template for displaying search
 *
 * @package Cursos
 */
get_header();
?>
<section class="section section-page-title" <?php if(get_theme_mod('cursos_blog_image')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('cursos_blog_image')); ?>')"  <?php }  ?>>
	<div class="overlay">
		<div class="container">
			<div class="section-title">
				<div class="gutter">
					<h4><?php printf( __( 'Search Results for: %s', 'cursos' ), '<span>' . get_search_query() . '</span>' ); ?></h4> 
				</div>
			</div> <!--  END seciton-title  -->
		</div> <!--  END container  -->
	</div> <!--  END overlay  -->
</section> <!--  END section-page-title  -->
<?php
get_template_part( 'content', 'posts' ); 
get_footer(); 
?>