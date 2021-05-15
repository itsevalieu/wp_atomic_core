<?php
/**
 * The template for displaying archive pages.
 * Template Name: Issues Archive Page
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  // for pagination 
$args = array(
	'post_type' => 'issues',
	'posts_per_page' => 12,
	'orderby'   => 'meta_value_num',
	'order'     => 'DESC',
	'paged' => $paged, // for pagination 
);
$the_query = new WP_Query($args);

?>

<div class="wrapper" id="archive-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php if ($the_query->have_posts()) : ?>

					<header class="page-header">
						<h1>Issues</h1>
						<p>cats</p>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<?php get_template_part('loop-templates/content', 'issuepreview'); ?>

					<?php endwhile; ?>
						<!-- The pagination component -->
					<?php
					understrap_pagination([
						'current' => $paged,
						'total'   => $the_query->max_num_pages,
					]);
					?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
