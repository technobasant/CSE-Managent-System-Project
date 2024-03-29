<?php
/**
 * The template for displaying all pages.
 *
 * @package Cursos 
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
			<section class="section section-page-title" <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?> style="background-image: url('<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($post->ID))); ?>')"  <?php  endif; ?>>
				<div class="overlay">
					<div class="container">
						<div class="section-title">
							<div class="gutter">
								<h4><?php the_title(); ?></h4>
								<?php the_excerpt(); ?>
							</div>
						</div> <!--  END seciton-title  -->
					</div> <!--  END container  -->
				</div> <!--  END overlay  -->
			</section> <!--  END section-page-title  -->
			<div class="section section-blog">
				<div class="container">
					<div class="column-container inner-page-columns">
						<div class="column-9-12 left">
							<div class="gutter">
								<div class="inner-page">
									<article class="single-post clearfix">	
										<?php the_content(); ?>
										<p><?php posts_nav_link(); ?></p>
										<div class="padinate-page"><?php wp_link_pages(); ?></div> 	
										<div class="comments">
											<?php comments_template(); ?>
										</div> <!--  END comments  -->
									</article>
								</div>
							</div>
						</div>
						<div class="column-3-12 right">
							<div class="gutter">
								<?php  get_sidebar(); ?>
							</div>
						</div>					
					</div>
				</div> <!--  END container  -->
			</div> <!--  END section-blog  -->
<?php endwhile; ?>
<?php get_footer(); ?>