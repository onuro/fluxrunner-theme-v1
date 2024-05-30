<?php
/**
 * Title: footer-2
 * Slug: flex-runner/footer-2
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"style":{"spacing":{"padding":{"bottom":"150px"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<footer class="wp-block-group" style="padding-bottom:150px"><!-- wp:group {"className":"footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group footer"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"footer-copyright","fontSize":"small"} -->
<p class="footer-copyright has-small-font-size"><?php echo __('©2024 FluxRunner, by <a href="#" target="_blank" rel="noreferrer noopener">Reaktor Studios.</a>', 'flex-runner');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"footer-social","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group footer-social"><!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/x.svg" alt="<?php echo __('', 'flex-runner');?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/linkedin.svg" alt="<?php echo __('', 'flex-runner');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->