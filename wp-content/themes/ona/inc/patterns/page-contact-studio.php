<?php
/**
 * Page Contact Studio
 */

$contact_form_7_form = ona_get_contact_form_7_forms();

return array(
	'title'      => esc_html__( 'Page contact studio', 'ona' ),
	'categories' => array( 'ona-pages' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Contact Form"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
		<div class="wp-block-column" style="padding-bottom:40px;flex-basis:40%"><!-- wp:heading {"fontSize":"medium-large"} -->
		<h2 class="wp-block-heading has-medium-large-font-size">' . esc_html__( 'Feel free to contact us anytime, we are happy to help.', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"lead"} -->
		<p class="has-lead-font-size">' . esc_html__( 'We are here to help you with any inquiry. Call us or visit us. Our company values customer support satisfaction. No question has been left unanswered. We resolve everything!', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":328,"sizeSlug":"large","linkDestination":"none","className":"no-shrink","style":{"color":{}}} -->
		<figure class="wp-block-image size-large no-shrink"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/mail-line.svg' ) ) . '" alt="" class="wp-image-328"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lead"} -->
		<h3 class="wp-block-heading has-lead-font-size">' . esc_html__( 'Drop us email', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><a href="mailto:hello@onaagency.com">' . esc_html__( 'hello@onaagency.com', 'ona' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":330,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/smartphone-line.svg' ) ) . '" alt="" class="wp-image-330"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lead"} -->
		<h3 class="wp-block-heading has-lead-font-size">' . esc_html__( 'Call us', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><a href="tel:0434 622 910">' . esc_html__( '0434 622 910', 'ona' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":329,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/map-pin-line.svg' ) ) . '" alt="" class="wp-image-329"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lead"} -->
		<h3 class="wp-block-heading has-lead-font-size">' . esc_html__( 'Visit our office', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '1210 North Avenue Luke Lane<br>IN Avenue Luke Lane 380001', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-light-background-color has-background" style="border-radius:10px;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Send us a message', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'We\'re excited to hear from you! Whether you have a project in mind, a question about our services, or just want to say hello, we\'re here to listen.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		' . $contact_form_7_form . '
		
		</div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);