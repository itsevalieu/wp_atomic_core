<?php
/**
 * Partial template for content in single-issues.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="issue-template" id="post-<?php the_ID(); ?>" style="border: 1px solid orange">

    <div class="header-section" style="border: 1px solid green">
        <header>
            <h1>The Lazy Tribune</h1>
        </header><!-- .entry-header -->
        <aside>
            <div class="issue">NO. <?php the_ID();?></div>
            <div class="date"><?php the_date(); ?></div>
            <div class="edition"><?php the_title(); ?> Edition</div>
        </aside>
    </div>
    <div class="main-section" style="border: 1px solid green">
        <div class="article-1"><?php get_template_part( 'issue-templates/issue', 'featured_post' ); ?></div>
        <div class="article-2"><?php get_template_part( 'issue-templates/issue', 'featured_post' ); ?></div>
        <div class="article-3"><?php get_template_part( 'issue-templates/issue', 'featured_post' ); ?></div>
    </div>
    <div class="middle-section" style="border: 1px solid green">
        <div class="article-4">4<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
        <div class="article-5">5<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
        <div class="article-6">6<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
    </div>
    <div class="right-section" style="border: 1px solid green">
        <div class="article-7">7<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
        <div class="article-8">8<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
        <div class="article-9">9<?php get_template_part( 'issue-templates/issue', 'tiny_post' ); ?></div>
    </div>
    <div class="bottom-section" style="border: 1px solid green">
        <div class="article-10">10 <?php get_template_part( 'issue-templates/issue', 'medium_post' ); ?></div>
    </div>

</article><!-- #post-## -->

<div class="wrapper">
    <div class="<?php echo esc_attr( $container ); ?>" id="content">
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </div>
</div>
