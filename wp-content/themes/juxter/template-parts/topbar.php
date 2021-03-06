<?php
// Get Content
global $hoot_theme;
$hoot_theme->topbar_left = is_active_sidebar( 'hoot-topbar-left' );
$hoot_theme->topbar_right = is_active_sidebar( 'hoot-topbar-right' );

// Template modification Hook
do_action( 'hoot_template_before_topbar' );

// Display Topbar
$hoot_topbar_left = $hoot_theme->topbar_left;
$hoot_topbar_right = $hoot_theme->topbar_right;
if ( !empty( $hoot_topbar_left ) || !empty( $hoot_topbar_right ) ) :

	?>
	<div class="topbar-wrap">
	<div <?php hybridextend_attr( 'topbar', '', 'accent-typo inline-nav hgrid-stretch' ); ?>>
		<div class="hgrid">
			<div class="hgrid-span-12">

				<div class="topbar-inner table">
					<?php if ( $hoot_topbar_left ): ?>
						<div id="topbar-left" class="table-cell-mid">
							<?php dynamic_sidebar( 'hoot-topbar-left' ); ?>
						</div>
					<?php endif; ?>

					<?php if ( $hoot_topbar_right ): ?>
						<div id="topbar-right" class="table-cell-mid">
							<div class="topbar-right-inner">
								<?php
								dynamic_sidebar( 'hoot-topbar-right' );
								?>
							</div>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
	</div>
	<?php

endif;

// Template modification Hook
do_action( 'hoot_template_after_topbar' );