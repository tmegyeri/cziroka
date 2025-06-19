<?php
/**
 * General: Hero studio
 */
return array(
	'title'      => __( 'Hero studio', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/studio/hero_1.jpg' ) ) . '","id":6,"dimRatio":0,"customOverlayColor":"#868487","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(90deg,rgb(241,241,241) 0%,rgba(155,81,224,0) 100%)","contentPosition":"center center","isDark":false,"metadata":{"categories":["ona-general"],"patternName":"ona/pro/general-hero-online-store","name":"Hero studio"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0px"}}}} -->
			<div class="wp-block-cover is-light is-style-default" style="margin-top:0px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient" style="background-color:#868487;background:linear-gradient(90deg,rgb(241,241,241) 0%,rgba(155,81,224,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="' . esc_url( get_theme_file_uri( 'assets/img/studio/hero_1.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-default","style":{"spacing":{"margin":{"bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"x-large"} -->
			<h1 class="wp-block-heading has-text-align-center is-style-default has-light-color has-text-color has-link-color has-x-large-font-size" style="margin-bottom:24px">' . esc_html__( 'Visualize Your Creativity', 'ona' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:group {"layout":{"type":"constrained","contentSize":"570px"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.38rem"}},"textColor":"light"} -->
			<p class="has-text-align-center has-light-color has-text-color has-link-color" style="font-size:1.38rem">' . esc_html__( 'We help founders at the formative stages of their venture, to take an idea from concept through to launch', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"right":"36px","left":"36px"}}}} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-right:36px;padding-left:36px">' . esc_html__( 'Start Here', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->',
);



