<?php
/**
 * Monthly Featured Post Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
$featured_post = get_field('featured_post');
$summary = $featured_post->project_summary; //intro
$subtitle = $featured_post->project_subtitle;
$image =  get_field('project_featured_image', $featured_post->ID);
$caption = $featured_post->project_featured_image_caption;
$url = $featured_post->url;
?>
<div class="monthly-featured-post">
    <?php if( $featured_post ):?>
        <h2 class="title--large"><?php echo esc_html( $subtitle ); ?></h2>
        <div class="multi-column"><?php echo $summary ?></div>
        <a href="<?php echo esc_url($url)?>" target="_blank">
            <figure>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']);?>"/>
                <figcaption><?php echo esc_html($caption)?></figcaption>
            </figure>        
        </a>
    <?php endif; ?>
</div>