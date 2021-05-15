<?php
/**
 * Issue Featured Post Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
$post_object = get_field('featured_post');
$title = $post_object->title;
$summary = $post_object->summary;
$image =  get_field('featured_image', $post_object->ID);
$caption = $post_object->featured_image_caption;
$url = $post_object->guid;
?>
<div class="featured-post">
    <?php if( $post_object ):?>
        <h2 class="title--large"><?php echo esc_html( $title ); ?></h2>
        <div class="multi-column"><?php echo $summary ?></div>
        <a href="<?php echo esc_url($url)?>" target="_blank">
            <figure>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']);?>"/>
                <figcaption><?php echo esc_html($caption)?></figcaption>
            </figure>        
        </a>
    <?php endif; ?>
</div>