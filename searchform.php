<?php
/**
 * The template for displaying search forms in John Walley
 *
 * @package WordPress
 * @subpackage John_Walley
 * @since John Walley 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'johnwalley' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'johnwalley' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'johnwalley' ); ?>" />
	</form>
