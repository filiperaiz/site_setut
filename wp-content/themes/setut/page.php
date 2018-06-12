<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling
 */

get_header(); ?>

	

	<?php if (is_page( 'sobre' )){ ?>

		<?php include "include_pages/sobre.php"; ?>
	

	<?php }elseif (is_page( 'sitt' )) { ?>
		
		<?php include "include_pages/sitt.php"; ?>	

	<?php }elseif (is_page( 'contato' )) { ?>

		<?php include "include_pages/contato.php"; ?>	

	<?php }elseif (is_page( 'faq' )) { ?>

		<?php include "include_pages/faq.php"; ?>		

	<?php } ?>






<?php get_footer(); ?>
