<?php
/**
 * General: Intro architecture 
 */
return array(
	'title'      => esc_html__( 'Intro architecture', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"120px","bottom":"92px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group" style="margin-top:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:92px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"7rem"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"bottom":"2rem"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:2rem;flex-basis:55%"><!-- wp:image {"id":54,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/intro.webp' ) ) . '" alt="" class="wp-image-54" style="border-radius:10px;object-fit:cover"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:heading {"fontSize":"medium-large"} -->
			<h2 class="wp-block-heading has-medium-large-font-size">' . esc_html__( 'Architectural more innovative and coherent your concept', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"lead"} -->
			<p class="has-lead-font-size">' . esc_html__( 'An idea that takes the parts of a structure and turns them into a whole system. Practice is the frequent and continued contemplation of the mode of executing any given work, or of the mere operation of the hands.', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



