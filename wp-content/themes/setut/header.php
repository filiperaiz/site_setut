<?php
/* *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */

if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {header('X-UA-Compatible: IE=edge,chrome=1');
}?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes();?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<?php echo of_get_option('nav_bg_color'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head();?>

</head>

<body <?php body_class();?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1872612539696162&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default <?php if (of_get_option('sticky_header')) {echo 'navbar-fixed-top';}?>" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">

						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div id="logo">
								<?php if (true) { //(get_header_image() != '') { ?>
										<a href="<?php echo esc_url(home_url('/')); ?>"><img src="/wp-content/themes/setut/assets/img/logo.png"  height="70" width="205" alt="<?php bloginfo('name');?>"/></a>
										<?php if (is_home()) {?>
											<h1 class="site-name hide-site-name"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
										<?php 
											}
									} else {
    									echo is_home() ?
    									'<h1 class="site-name">' : '<p class="site-name">';
    								?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name');?></a>
									<?php echo is_home() ? '</h1>' : '</p>'; ?>
								<?php }?>
							</div><!-- end of #logo -->
						</div>



						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul id="menu-pagina-inicial" class="nav navbar-nav">
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/sobre/">Sobre</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/sitt/">SITT</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="http://maisfacilteresina.com.br" target="_blank">Mais Fácil</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/category/informativos/">Informativos</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/faq/">Faq</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/contato/">Contato</a>
								</li>
							</ul>
						</div>



						<?php //sparkling_header_menu(); // main navigation ?>




					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
			<div class="tap-target">
				<a href="https://www.facebook.com/setut.teresina" target="_blank" class="btn-social" title="Facebook SETUT">
					<img src="/wp-content/themes/setut/assets/img/facebook.png" width="40" alt="Facebook">
				</a>

				<a href="https://twitter.com/setut_the" target="_blank" class="btn-social" title="twiiter SETUT">
					<img src="/wp-content/themes/setut/assets/img/twitter.png" width="40" alt="twitter">
				</a>
			</div>							
		<div class="top-section">

			<?php if (is_home()) {?>

			<div class="flexslider">
				<ul class="slides">

					<?php
					$count = 3;
    				$query = new WP_Query(array(
        				'category_name' => 'slide',
    					'posts_per_page' => $count,
        				'meta_query' => array(
            				array(
                				'key' => '_thumbnail_id',
                				'compare' => 'EXISTS',
            				),
        				),
    				));
    				if ($query->have_posts()):
				        while ($query->have_posts()): $query->the_post();

				            echo '<li>';
				            if (get_the_excerpt() != '') {
				                echo '<a href="' . get_permalink() . '">';
				            }

				            if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())):
				                if (class_exists('Jetpack') && Jetpack::is_module_active('photon')) {
				                    $feat_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
				                    $args = array(
				                        'resize' => '1920,550',
				                    );
				                    $photon_url = jetpack_photon_url($feat_image_url[0], $args);
				                    echo '<img src="' . $photon_url . '">';
				                } else {
				                    echo get_the_post_thumbnail(get_the_ID(), 'activello-slider');
				                }
				            endif;

				            echo '<div class="flex-caption">';
				            if (get_the_excerpt() != '') {
				                echo '<h2 class="entry-title">' . get_the_title() . '</h2>';
				            }
				            echo '</div>';

				            if (get_the_excerpt() != '') {
				                echo '</a>';
				            }

				            echo '</li>';
				        endwhile;
				    endif;
    				wp_reset_postdata();
    				?>
				</ul>
			</div>

			<?php }?>

		</div>


		<div class="container main-content-area">

			<div class="row">
				<?php if(is_page() or is_home()){$class_css = 'col-sm-12 col-md-12';}else{$class_css = 'col-sm-12 col-md-8';} ?>
				<div class="main-content-inner col-md-12 <?php echo $class_css; ?>">
				<?php if (is_home()) {?>
				
				<?php $page = get_page_by_title('Sobre');?>
				<div class="about-section">
					<div class="row side-padding">
						<div class="col-md-12 ">
							<h2 class="title">
								<?php echo $page->post_title; ?>
							</h2>
							<p class="subtitle">

								<?php echo more_text($page->post_content, 350); ?>

							</p>

							<a class="btn btn-default" href="<?php echo $page->guid; ?>" title="<?php echo $page->post_title; ?>">Saiba mais</a>
						</div>
					</div>
				</div>

				<?php $page = get_page_by_title('SITT');?>
				<?php $chamada_home = get_post_custom_values( 'chamada_home', $page->ID ); ?>

				<section class="sitt-section" style="background-image: url(<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>)">
		            <div class="row">
						<div class="col-sm-6">
							<div class="bgshadow">
								<div class="bgshadowcenter">
								<h2><?php echo $page->post_title; ?></h2>
								<p> <?php echo more_text($chamada_home[0], 400); ?></p>

								<a class="btn button-border" href="<?php echo $page->guid; ?>" title="<?php echo $page->post_title; ?>">Saiba mais</a>
							</div>
						</div>
					</div>

				</section>

				<?php $page = get_page_by_title('Mais Fácil');?>
				<div class="maisfacil-section">
		            <div class="row no-side-margin">
						<div class="col-sm-8">
							
							<?php echo get_the_post_thumbnail($page, array(600, 400), array('class' => 'banner')); ?>
							
						</div>

						<div class="col-sm-4 side-padding">
							<h2 class="title">
								<img src="http://maisfacilteresina.com.br/images/img_topo_01.png" alt="">
							</h2>
							<p class="subtitle"><?php echo more_text($page->post_content, 300); ?></p>

							<a class="btn btn-default" href="http://maisfacilteresina.com.br" target="_target" title="<?php echo $page->post_title; ?>">Saiba mais</a>
						</div>
					</div>
				</div>
				
				<?php }?>