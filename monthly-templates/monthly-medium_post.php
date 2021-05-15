<?php
/**
 * Monthly Medium Post Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
$post_object = get_field('medium_post');
$title = $post_object->title;
$summary = $post_object->summary;
$image =  get_field('featured_image', $post_object->ID);
$url = $post_object->guid;
?>
<?php if( $post_object ):?>
    <div class="medium-post">
        <a href="<?php echo esc_url($url)?>" target="_blank">
            <?php if( $image ):?>
                <figure>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']);?>"/>
                </figure>        
            <?php endif; ?>
            <h4><?php echo esc_html( $title ); ?></h4>
            <div class="multi-column"><?php echo $summary ?></div>
        </a>
    </div>
<?php endif; ?>
