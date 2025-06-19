<?php
/**
 * General: Projects architecture
 */
return array(
	'title'      => esc_html__( 'Projects architecture', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Projects"},"style":{"spacing":{"margin":{"top":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"}}},"backgroundColor":"dark","layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group has-dark-background-color has-background" style="margin-top:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color has-large-font-size">' . esc_html__( 'Our Best Projects', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","fontSize":"lead"} -->
		<p class="has-text-align-center has-text-light-color has-text-color has-link-color has-lead-font-size">' . esc_html__( 'Innovative Designs, Timeless Impact: Our Latest Architectural Endeavors', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column"><!-- wp:group {"className":"hover-scale","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group hover-scale" style="border-top-left-radius:10px;border-top-right-radius:10px"><!-- wp:image {"lightbox":{"enabled":false},"id":74,"linkDestination":"custom","className":"is-style-ona-full-link","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
		<figure class="wp-block-image has-custom-border is-style-ona-full-link"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/project_1.webp' ) ) . '" alt="" class="wp-image-74" style="border-top-left-radius:10px;border-top-right-radius:10px"/></a></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"},"blockGap":"1rem"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:2rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Maple Grove Homes', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'A cozy development of 15 single-family homes nestled among mature maple trees, offering a perfect blend of natural beauty.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|dark"}}}}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color has-link-color"><a href="#" data-type="page" data-id="344">' . esc_html__( 'View Project', 'ona' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column"><!-- wp:group {"className":"hover-scale","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group hover-scale" style="border-top-left-radius:10px;border-top-right-radius:10px"><!-- wp:image {"lightbox":{"enabled":false},"id":92,"sizeSlug":"full","linkDestination":"custom","className":"is-style-ona-full-link","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border is-style-ona-full-link"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/project_2.webp' ) ) . '" alt="project_2" class="wp-image-92" style="border-top-left-radius:10px;border-top-right-radius:10px"/></a></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"},"blockGap":"1rem"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:2rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Greenwood Commons', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'A modern complex of 30 eco-friendly houses along the riverside, featuring shared green spaces and a community boathouse', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|dark"}}}}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color has-link-color"><a href="#" data-type="page" data-id="375">' . esc_html__( 'View Project', 'ona' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column"><!-- wp:group {"className":"hover-scale","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group hover-scale" style="border-top-left-radius:10px;border-top-right-radius:10px"><!-- wp:image {"lightbox":{"enabled":false},"id":93,"sizeSlug":"full","linkDestination":"custom","className":"is-style-ona-full-link","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border is-style-ona-full-link"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/project_3.webp' ) ) . '" alt="" class="wp-image-93" style="border-top-left-radius:10px;border-top-right-radius:10px"/></a></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"},"blockGap":"1rem"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-background-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:2rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Parkview Place', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'A boutique collection of 10 luxury condominiums overlooking the city\'s central park, offering premium amenities and panoramic views.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|dark"}}}}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color has-link-color"><a href="#" data-type="page" data-id="395">' . esc_html__( 'View Project', 'ona' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"textColor":"light","className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-light-color has-text-color has-link-color wp-element-button" href="#" style="border-width:2px">' . esc_html__( 'View All Projects', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group -->',
);



