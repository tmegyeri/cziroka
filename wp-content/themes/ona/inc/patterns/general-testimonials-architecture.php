<?php
/**
 * General: Testimonials architecture
 */
return array(
	'title'      => esc_html__( 'Testimonials architecture', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group" style="margin-top:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-large-font-size">' . esc_html__( 'What our customers are saying', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"lead"} -->
		<p class="has-text-align-center has-lead-font-size">' . esc_html__( 'Here’s what people think about the Ona Architecture', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px","width":"1px","color":"#e8e8e8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top has-border-color" style="border-color:#e8e8e8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":514,"width":"36px","sizeSlug":"full","linkDestination":"none","className":"no-shrink","style":{"border":{"radius":"99px"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"4px","bottom":"4px"}}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border no-shrink" style="margin-top:4px;margin-bottom:4px"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/testimonial_1.webp' ) ) . '" alt="" class="wp-image-514" style="border-radius:99px;width:36px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|headings"}}}},"textColor":"headings","fontSize":"small"} -->
		<p class="has-headings-color has-text-color has-link-color has-small-font-size"><strong>' . esc_html__( 'Christine Clark', 'ona' ) . '</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( 'CEO of Skyline', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":506,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/stars-small.svg' ) ) . '" alt="" class="wp-image-506" style="object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Ona Architecture\'s community-first approach set them apart. They listened to residents\' concerns and incorporated our feedback at every stage. The resulting community center has become the heart of our neighborhood.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px","width":"1px","color":"#e8e8e8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top has-border-color" style="border-color:#e8e8e8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":510,"width":"36px","sizeSlug":"full","linkDestination":"none","className":"no-shrink","style":{"border":{"radius":"99px"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"4px","bottom":"4px"}}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border no-shrink" style="margin-top:4px;margin-bottom:4px"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/testimonial_2.webp' ) ) . '" alt="" class="wp-image-510" style="border-radius:99px;width:36px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|headings"}}}},"textColor":"headings","fontSize":"small"} -->
		<p class="has-headings-color has-text-color has-link-color has-small-font-size"><strong>' . esc_html__( 'Sarah Chen', 'ona' ) . '</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( 'Horizon Properties', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":506,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/stars-small.svg' ) ) . '" alt="" class="wp-image-506" style="object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Ona Architecture transformed our vision into reality with their innovative sustainable design approach. Their attention to detail and commitment to environmental consciousness resulted in a building that not only looks stunning but also achieved LEED Platinum certification.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px","width":"1px","color":"#e8e8e8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top has-border-color" style="border-color:#e8e8e8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":511,"width":"36px","sizeSlug":"full","linkDestination":"none","className":"no-shrink","style":{"border":{"radius":"99px"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"4px","bottom":"4px"}}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border no-shrink" style="margin-top:4px;margin-bottom:4px"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/testimonial_3.webp' ) ) . '" alt="" class="wp-image-511" style="border-radius:99px;width:36px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|headings"}}}},"textColor":"headings","fontSize":"small"} -->
		<p class="has-headings-color has-text-color has-link-color has-small-font-size"><strong>' . esc_html__( 'Marcus Rodriguez', 'ona' ) . '</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( 'Metropolitan Council', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":506,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/stars-small.svg' ) ) . '" alt="" class="wp-image-506" style="object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Working with Ona Architecture on our downtown revitalization project was a game-changer. Their ability to blend modern design with historical preservation created a perfect harmony that has revitalized our city center.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px","width":"1px","color":"#e8e8e8"}}} -->
		<div class="wp-block-column is-vertically-aligned-top has-border-color" style="border-color:#e8e8e8;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":512,"width":"36px","sizeSlug":"full","linkDestination":"none","className":"no-shrink","style":{"border":{"radius":"99px"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"4px","bottom":"4px"}}}} -->
		<figure class="wp-block-image size-full is-resized has-custom-border no-shrink" style="margin-top:4px;margin-bottom:4px"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/testimonial_4.webp' ) ) . '" alt="" class="wp-image-512" style="border-radius:99px;width:36px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|headings"}}}},"textColor":"headings","fontSize":"small"} -->
		<p class="has-headings-color has-text-color has-link-color has-small-font-size"><strong>' . esc_html__( 'Emily Weber', 'ona' ) . '</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( 'Tech Innovations', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":506,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/stars-small.svg' ) ) . '" alt="" class="wp-image-506" style="object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'The team at Ona Architecture designed our new headquarters with incredible vision. They created a space that perfectly reflects our company culture while maximizing productivity and employee well-being. The result is simply breathtaking.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);



