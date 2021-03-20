<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?> class="no-js">

<head>
<?php
// Fire the wp_head action required for hooking in scripts, styles, and other <head> tags.
wp_head();
?>
</head>

<body <?php hybridextend_attr( 'body' ); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="screen-reader-text"><?php _e( 'Skip to content', 'juxter' ); ?></a>

	<div <?php hybridextend_attr( 'page-wrapper' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_site_start' );

		// Display Topbar
		get_template_part( 'template-parts/topbar' );
		?>

		<header <?php hybridextend_attr( 'header' ); ?>>

			<div <?php hybridextend_attr( 'header-part', 'primary' ); ?>>
				<div class="hgrid">
					<div class="table hgrid-span-12">
						<?php
						// Display Branding
						hoot_header_branding();

						// Display Header Aside Section
						hoot_header_aside();
						?>
					</div>
				</div>
			</div>

			<?php
			// Display Menu
			hoot_header_menu();
			?>

		</header><!-- #header -->

		<div <?php hybridextend_attr( 'main' ); ?>>
			<?php
			// Template modification Hook
			do_action( 'hoot_template_main_wrapper_start' );