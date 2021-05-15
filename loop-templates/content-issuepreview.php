<?php
/**
 * Issue Preview Post Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
$post_id = get_the_ID();
?>
<div class="featured-post">
<?php the_title(); ?>
<h2 class="title--large"><?php echo esc_html( $title ); echo $post_id;?></h2>
    <?php if( $post_id ):?>
        <h2 class="title--large"><?php echo esc_html( $title ); ?></h2>
        <div class="multi-column"><?php echo $summary ?></div>
        asdfasdf
        <a href="<?php echo esc_url($url)?>" target="_blank">
            <figure>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']);?>"/>
                <figcaption><?php echo esc_html($caption)?></figcaption>
            </figure>        
        </a>
    <?php endif; ?>
</div>