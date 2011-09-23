<?php
/**
 * Template Name: Front Page Template
 * Description: A front page template for www.walley.org.uk
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage John_Walley
 * @since John Walley 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>