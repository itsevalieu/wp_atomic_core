<?php
/**
 * Partial template for content in monthly-frontpage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="monthly-template" id="post-<?php the_ID(); ?>">
    <div class="header-section">
        <header>
            <h1>The Lazy Tribune</h1>
        </header><!-- .entry-header -->
        <aside>
            <div class="issue">NO. 1</div>
            <div class="date"><?php the_date(); ?></div>
            <div class="edition"><?php the_title(); ?> Edition</div>
        </aside>
    </div>
	<div class="main-section">
        <?php get_template_part( 'monthly-templates/monthly', 'featured_post' ); ?>
	</div>
    <div class="right-section">
        <?php get_template_part( 'monthly-templates/monthly', 'tiny_post' ); ?>
    </div>
    <div class="bottom-section"><?php get_template_part( 'monthly-templates/monthly', 'medium_post' ); ?></div>

</article><!-- #post-## -->

<?php
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
    )
);
?>
