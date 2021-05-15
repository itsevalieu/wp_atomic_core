<?php
/**
 * Partial template for content in monthly-frontpage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="monthly wrapper" style="border: 1px solid red">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

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

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

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
