<?php
/**
 * Title: header
 * Slug: flex-runner/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"style":{"spacing":{"padding":{"right":"16px","left":"16px"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero.png","id":1132,"source":"file","title":"hero"},"backgroundSize":"contain","backgroundPosition":"100% 0%","backgroundRepeat":"no-repeat"}},"className":"hero-wrap","layout":{"type":"constrained","wideSize":"1200px","contentSize":"1200px"}} -->
<section class="wp-block-group hero-wrap" style="padding-right:16px;padding-left:16px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:site-logo /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"className":"hero-text","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group hero-text"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo __('Web3 Powered WordPress', 'flex-runner');?></h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Fast. Affordable. Redundant.', 'flex-runner');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Welcome to the new home for your WordPress sites. Enjoy lightning-fast website speed, automatic updates, and enterprise-level security.', 'flex-runner');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('Email', 'flex-runner');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->