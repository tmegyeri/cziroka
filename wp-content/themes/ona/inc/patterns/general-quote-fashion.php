<?php
/**
 * General quote fashion
 */
return array(
	'title'      => __( 'Quote fashion', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '			
		<!-- wp:group {"metadata":{"categories":["ona-general"],"patternName":"ona/general-quote-fashion","name":"Quote fashion"},"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"},"margin":{"top":"0px"}}},"backgroundColor":"primary","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0px;padding-top:120px;padding-bottom:120px">
		
		<!-- wp:image {"align":"center","id":277,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/fashion/quote.svg' ) ) . '" alt="" class="wp-image-277"/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"bottom":"60px","top":"68px"}}},"textColor":"background","fontSize":"medium-large"} -->
		<h2 class="has-text-align-center has-background-color has-text-color has-medium-large-font-size" style="font-style:italic;font-weight:400;margin-top:68px;margin-bottom:60px">' . __( 'Fashion is what you\'re offered four times a year by designers. And style is what you choose.', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color" style="font-size:1.125rem">— Camille Alforque</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->',
);





