<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cursos
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="wrapper">
		<header id="header" class="header">
			<div class="top-bar">
				<div class="container">
					<div class="column-container top-bar-columns">
						<div class="column-7-12 left">
							<div class="gutter">
								<ul class="top-bar-contact">
								    <?php if(get_theme_mod('cursos_header_phone')) { ?><li><i class="fa fa-phone"></i><a href="phone:<?php echo esc_html(get_theme_mod('cursos_header_phone')); ?>"><?php echo esc_html(get_theme_mod('cursos_header_phone')); ?></a></li><?php } ?>
									<?php if(get_theme_mod('cursos_header_email')) { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo antispambot(sanitize_email(get_theme_mod('cursos_header_email'))); ?>"><?php echo antispambot(sanitize_email(get_theme_mod('cursos_header_email'))); ?></a></li><?php } ?>
								</ul>
							</div>
						</div>
						<?php if(get_theme_mod('cursos_social_media_code1') or get_theme_mod('cursos_social_media_code2') or get_theme_mod('cursos_social_media_code3') or get_theme_mod('cursos_social_media_code4') or get_theme_mod('cursos_social_media_code5')) { ?>
						<div class="column-5-12 right">
							<div class="gutter">
								<ul>
									<?php if(get_theme_mod('cursos_social_media_code1')) { ?><li><a class="fa fa-<?php echo sanitize_html_class(get_theme_mod('cursos_social_media_code1')); ?>" href="<?php echo esc_url(get_theme_mod('cursos_social_media_link1')); ?>"></a></li><?php } ?>
									<?php if(get_theme_mod('cursos_social_media_code2')) { ?><li><a class="fa fa-<?php echo sanitize_html_class(get_theme_mod('cursos_social_media_code2')); ?>" href="<?php echo esc_url(get_theme_mod('cursos_social_media_link2')); ?>"></a></li><?php } ?>
									<?php if(get_theme_mod('cursos_social_media_code3')) { ?><li><a class="fa fa-<?php echo sanitize_html_class(get_theme_mod('cursos_social_media_code3')); ?>" href="<?php echo esc_url(get_theme_mod('cursos_social_media_link3')); ?>"></a></li><?php } ?>
									<?php if(get_theme_mod('cursos_social_media_code4')) { ?><li><a class="fa fa-<?php echo sanitize_html_class(get_theme_mod('cursos_social_media_code4')); ?>" href="<?php echo esc_url(get_theme_mod('cursos_social_media_link4')); ?>"></a></li><?php } ?>
									<?php if(get_theme_mod('cursos_social_media_code5')) { ?><li><a class="fa fa-<?php echo sanitize_html_class(get_theme_mod('cursos_social_media_code5')); ?>" href="<?php echo esc_url(get_theme_mod('cursos_social_media_link5')); ?>"></a></li><?php } ?>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div> <!--  END container  -->
			</div> <!--  END top-bar  -->
			<div class="header-block">
				<div class="container">
					<div class="gutter clearfix">
					    <?php cursos_the_custom_logo(); ?>
						<nav class="menu-top-container">
							<?php if ( has_nav_menu( 'cursos-menu' ) ) { ?>
							   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'cursos-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
							<?php } else { ?>
								<?php wp_nav_menu(  array('container'=> '', 'menu_class'  => 'menu-top', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>' ) ); ?>
							<?php } ?>
						</nav>
						<nav class="menu-top-mob-container">
							<a class="icon-menu" href="#"><?php _e( 'Menu', 'cursos' ); ?></a>
							<?php if ( has_nav_menu( 'cursos-menu' ) ) { ?>
							   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'cursos-menu', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>'  ) ); ?>
							<?php } else { ?>
								<?php wp_nav_menu(  array('container'=> '', 'menu_class'  => 'menu-top-mob', 'items_wrap'  => '<ul class="menu-top-mob">%3$s</ul>' ) ); ?>
							<?php } ?>
						</nav>
					</div>
				</div> <!--  END container  -->
			</div> <!--  END header-block  -->
		</header> <!--  END header  -->
		<div id="content" class="content">
