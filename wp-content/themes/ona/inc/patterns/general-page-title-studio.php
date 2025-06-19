<?php
/**
 * General: Page title studio
 */
return array(
	'title'      => esc_html__( 'Page title studio', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/blog_page_title.jpg","id":270,"dimRatio":20,"overlayColor":"dark","isUserOverlayColor":true,"minHeight":320,"contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:64px;padding-bottom:64px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-270" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/blog_page_title.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"large"} -->
			<h1 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color has-large-font-size">' . esc_html__( 'Latest News', 'ona' ) . '</h1>
			<!-- /wp:heading --></div></div>
			<!-- /wp:cover -->',
);



