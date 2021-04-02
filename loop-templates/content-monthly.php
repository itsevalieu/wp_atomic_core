<?php
/**
 * Partial template for content in monthly-frontpage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="monthly-template" id="post-<?php the_ID(); ?>" style="border: 1px solid orange">
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
    <div class="right-section">right section</div>
    <div class="bottom-section">bottom section</div>

</article><!-- #post-## -->

<?php
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
    )
);
?>
