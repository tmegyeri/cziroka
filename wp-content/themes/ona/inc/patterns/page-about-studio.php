<?php
/**
 * Page about studio
 */

return array(
	'title'      => esc_html__( 'Page about studio', 'ona' ),
	'categories' => array( 'ona-pages' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"About Page"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/about_page_title.webp","id":412,"alt":"about_page_title","dimRatio":50,"overlayColor":"dark","isUserOverlayColor":true,"contentPosition":"bottom center","metadata":{"name":"Page Title"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"60px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-top:60px;padding-right:var(--wp--preset--spacing--50);padding-bottom:60px;padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-412" alt="about_page_title" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/about_page_title.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Page Title"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"460px"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"x-large"} -->
		<h1 class="wp-block-heading has-x-large-font-size">' . esc_html__( 'About Us', 'ona' ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"lead"} -->
		<p class="has-light-color has-text-color has-link-color has-lead-font-size">' . esc_html__( 'Welcome to Ona, where creativity meets functionality and dreams become structures.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->

		<!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"7rem"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"46%"} -->
		<div class="wp-block-column" style="flex-basis:46%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading -->
		<h2 class="wp-block-heading">' . esc_html__( 'Shaping Spaces,', 'ona') . '<br>' . esc_html__( 'Enriching Lives', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<p style="font-size:1.25rem">' . esc_html__( 'Founded in 2019 by Michael Jefferson, Ona began with a vision to transform the urban landscape while honoring the natural environment.',  'ona') . '<br>' . esc_html__( 'What started as a small team with big ideas has grown into a renowned architectural practice, known for innovative designs that stand the test of time.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":453,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/rating.webp" alt="" class="wp-image-453"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
		<p>' . esc_html__( 'Top rated Australian company', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:image {"id":454,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/stars.svg" alt="" class="wp-image-454"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"54%"} -->
		<div class="wp-block-column" style="flex-basis:54%"><!-- wp:image {"id":423,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/about_intro.webp" alt="About Ona" class="wp-image-423" style="border-radius:10px"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Stats"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group alignfull" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:60px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"ona-bento-grid","layout":{"type":"grid","minimumColumnWidth":null,"columnCount":10}} -->
		<div class="wp-block-group ona-bento-grid"><!-- wp:group {"style":{"layout":{"columnSpan":3,"rowSpan":1},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"},"color":{"background":"#f2f8f9"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f2f8f9;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size">' . esc_html__( '25+', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.38rem">' . esc_html__( 'Years in Business', 'ona' ) . '</h3>
		<!-- /wp:heading --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fill","flexSize":null},"color":{"background":"#f5f4fc"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f5f4fc;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size">' . esc_html__( '30', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.38rem">' . esc_html__( 'LEED-certified buildings', 'ona' ) . '</h3>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"layout":{"columnSpan":3,"rowSpan":1},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"},"color":{"background":"#faf3f0"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-background" style="border-radius:10px;background-color:#faf3f0;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size">' . esc_html__( '500+', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.38rem">' . esc_html__( 'Completed Projects', 'ona' ) . '</h3>
		<!-- /wp:heading --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fill","flexSize":null},"color":{"background":"#f2f4f1"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f2f4f1;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size">' . esc_html__( '98%', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.38rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.38rem">' . esc_html__( 'Client Satisfaction Rate', 'ona' ) . '</h3>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/about_stats.webp","id":431,"dimRatio":30,"overlayColor":"dark","isUserOverlayColor":true,"minHeight":612,"className":"hover-scale is-style-ona-hover-scale","style":{"layout":{"columnSpan":4,"rowSpan":1},"border":{"radius":"10px"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-cover hover-scale is-style-ona-hover-scale" style="border-radius:10px;margin-bottom:var(--wp--preset--spacing--50);padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem;min-height:612px"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-431" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/about_stats.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"layout":{"columnSpan":4,"rowSpan":1}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"medium-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-medium-large-font-size">' . esc_html__( 'We Believe in Transparent Processes And Honest Communication', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-outline","style":{"border":{"width":"2px"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-align-center wp-element-button" style="border-width:2px">' . esc_html__( 'See How We Can Help', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover --></div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<style>@media (max-width: 992px) {
		div.ona-bento-grid {
			display: block;
		}
		}</style>
		<!-- /wp:html --></div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Team"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"120px","top":"60px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-large-font-size">' . esc_html__( 'Meet Our Visionaries', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"lead"} -->
		<p class="has-text-align-center has-lead-font-size">' . esc_html__( 'At Ona, our strength lies in the diverse talents and expertise of our team. Each member brings a unique perspective, contributing to our innovative and holistic approach to architecture.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":456,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_1.webp" alt="team_1" class="wp-image-456" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Michael Okonkwo', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Founder', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":458,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_2.webp" alt="" class="wp-image-458" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Sarah Chen', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Senior Project Manager', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":460,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_3.webp" alt="" class="wp-image-460" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Robert Tanaka', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Urban Planning Expert', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":461,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_4.webp" alt="" class="wp-image-461" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Emma Larsson', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Interior Design Lead', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":463,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_5.webp" alt="" class="wp-image-463" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Carlos Mendoza', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '3D Visualization Artist', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":465,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_6.webp" alt="" class="wp-image-465" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Leila Al-Fayed', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Lead Architect', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":466,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_7.webp" alt="" class="wp-image-466" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'David Weiss', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Client Relations', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"}}},"borderColor":"stroke","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-stroke-border-color" style="border-width:1px;border-radius:10px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"id":464,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/team_8.webp" alt="" class="wp-image-464" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
		<h3 class="wp-block-heading" style="font-size:1.25rem">' . esc_html__( 'Aisha Patel', 'ona' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'Sustainability Specialist', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#5e5e5e","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Promo CTA"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"},"margin":{"top":"0"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group has-background-light-background-color has-background" style="margin-top:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"fontSize":"medium-large"} -->
		<h2 class="wp-block-heading has-medium-large-font-size">' . esc_html__( 'Discover how we can bring your architectural dreams to life.', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"lead"} -->
		<p class="has-lead-font-size">' . esc_html__( 'From concept to completion, we\'re with you every step of the way. Ready to start your journey? Contact us today for a free consultation and let\'s create something extraordinary together.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none","className":"no-shrink"} -->
		<figure class="wp-block-image size-large no-shrink"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/icon-check.svg" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><img class="wp-image-118" style="width: 0px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/icon-check.svg" alt=""><img class="wp-image-118" style="width: 0px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/icon-check.svg" alt="">' . esc_html__( '25+ Years of Excellence', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/icon-check.svg" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '1,564+ Satisfied Clients', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/icon-check.svg" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '50 Industry Awards', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"light","className":"is-style-ona-button-arrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"border":{"width":"2px"}}} -->
		<div class="wp-block-button is-style-ona-button-arrow-icon"><a class="wp-block-button__link has-light-color has-text-color has-link-color wp-element-button" href="#" style="border-width:2px">' . esc_html__( 'Let\'s Work Together', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"layout":{"type":"grid"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":468,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/cta_promo_1.webp" alt="cta_promo_1" class="wp-image-468" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":469,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/cta_promo_2.webp" alt="cta_promo_2" class="wp-image-469" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":470,"sizeSlug":"large","linkDestination":"none","style":{"layout":{"columnSpan":2,"rowSpan":1},"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/studio/cta_promo_3.webp" alt="cta_promo_3" class="wp-image-470" style="border-radius:10px"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);



