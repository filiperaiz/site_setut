<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package sparkling
 */
?>

	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'home-widget-1' ) && ! is_active_sidebar( 'home-widget-2' ) && ! is_active_sidebar( 'home-widget-3' ) ) {
		return;
	}
	// If we made it this far we must have widgets.
	?>
	<div class="box-full">
	<div class="home-widget-area row">
		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
		<div class="col-sm-6 home-widget pad-widget-home" role="complementary">
			<?php dynamic_sidebar( 'home-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
		<div class="col-sm-6 home-widget pad-widget-home" role="complementary">
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>
	</div>
	</div>

