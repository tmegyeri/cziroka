<?php
/**
 * General partner logos studio
 */
return array(
	'title'      => __( 'Partner logos studio', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"metadata":{"name":"Partners"},"style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"140px","bottom":"140px"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="margin-top:0px;padding-top:140px;padding-right:var(--wp--preset--spacing--50);padding-bottom:140px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"5rem"}}},"fontSize":"medium-large"} -->
			<h2 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-bottom:5rem">' . esc_html__( 'High-level Design studio with an entrepreneurial spirit.', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"lightbox":{"enabled":false},"id":55,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/studio_partner_logo_1.webp' ) ) . '" alt="" class="wp-image-55"/></a></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"lightbox":{"enabled":false},"id":56,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/studio_partner_logo_2.webp' ) ) . '" alt="" class="wp-image-56"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"lightbox":{"enabled":false},"id":57,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/studio_partner_logo_3.webp' ) ) . '" alt="" class="wp-image-57"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"lightbox":{"enabled":false},"id":58,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/studio_partner_logo_4.webp' ) ) . '" alt="" class="wp-image-58"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);