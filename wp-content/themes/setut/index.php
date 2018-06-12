<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	
	<div id="primary" class="content-area">
	<div class="row no-side-margin news-block">
				
				
			
				
				<div class="col-md-12 news-home ">
					<div class="row side-padding">
							<div class="col-md-12 ">
								<h2 class="title">
									Informativos
								</h2>
							</div>
					</div>
					
					<!-- NOTICIAS NÃO IMPORTANTES -->
					<!-- <h2>Últimas Notícias</h2> -->
			
						<?php
						$args = array(
							'category_name' => 'Informativos',
							'posts_per_page' => 5
						);
						$query = new WP_Query( $args );
			
						if ( $query->have_posts() ) :
			
							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
			
							<?php
							endif;
			
							/* Start the Loop */
							//while ( have_posts() ) : the_post();
							while ( $query->have_posts() ) {
								$query->the_post();
			
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
			
							}
							//endwhile;
			
							if ( function_exists( 'wp_pagenavi' ) ) {
								wp_pagenavi();
							} else {
								the_posts_pagination( array(
									'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'sparkling' ),
									'next_text' => __( 'Older posts', 'sparkling' ) . ' <i class="fa fa-chevron-right"></i>',
								) );
							}
						endif; ?>		
				</div>
			</div>
		

	</div>

<?php
//get_sidebar();
get_footer();
