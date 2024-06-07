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

<!-- wp:group {"className":"newsletter-mail","layout":{"type":"constrained"}} -->
<div class="wp-block-group newsletter-mail"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo __('Email', 'flex-runner');?></h5>
<!-- /wp:heading -->

<!-- wp:html -->
<!-- MailerLite Universal -->
<script>
    (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
    .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
    n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
    (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
    ml('account', '976970');
</script>
<!-- End MailerLite Universal -->

<div class="ml-embedded" data-form="RPvDn8"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->