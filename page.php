<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Halcyonic
 * @since Halcyonic 1.0
 */

get_header(); ?>
		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="9u">
								<?php while ( have_posts() ) : the_post(); ?>
								<!-- Main Content -->
									<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header>
											<h1><?php the_title();?></h1>
										</header>
										<div class="entry-thumbnail">
											<?php the_post_thumbnail(); ?>
										</div>
										<?php the_content();?>
									</section>
								<?php endwhile; ?>
							</div>
							<div class="3u">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>