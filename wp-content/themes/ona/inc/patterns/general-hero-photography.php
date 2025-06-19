<?php
/**
 * General hero photography
 */
return array(
	'title'      => __( 'Hero photography', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/photography/ona_photography_hero.jpg","id":25,"alt":"ona_photography_hero","dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgba(36,36,30,0.33) 58%,rgb(36,36,30) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"1.6rem","right":"1.6rem"}}},"className":"is-style-default","layout":{"type":"default"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default" style="padding-top:6rem;padding-right:1.6rem;padding-bottom:6rem;padding-left:1.6rem;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(36,36,30,0.33) 58%,rgb(36,36,30) 100%)"></span><img class="wp-block-cover__image-background wp-image-25" alt="ona_photography_hero" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/photography/ona_photography_hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"3x-large"} -->
			<h1 class="wp-block-heading has-3-x-large-font-size" style="line-height:1.1">' . esc_html__( 'The Art of Capturing Memories', 'ona' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2rem","fontStyle":"normal","fontWeight":"500"}}} -->
			<h1 class="wp-block-heading" style="font-size:2rem;font-style:normal;font-weight:500">' . esc_html__( 'Portrait • Landscape • Architecture • Wedding', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->',
);



