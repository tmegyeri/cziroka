<?php

namespace ColibriWP\Theme\Components\FrontHeader;

use ColibriWP\Theme\Components\CSSOutput;
use ColibriWP\Theme\Core\ComponentBase;
use ColibriWP\Theme\Defaults;
use ColibriWP\Theme\Translations;
use ColibriWP\Theme\View;

class ButtonsGroup extends ComponentBase {

	protected static $settings_prefix = "header_front_page.button_group.";

	/**
	 * @return array();
	 */
	protected static function getOptions() {
		$prefix = static::$settings_prefix;
        $defaultValue = Defaults::get( "{$prefix}value" );

        //in wp 6.7 we can't add translation before the init hook
        $colibriwp_theme_action_button = __('Action Button %d', 'digitala');
        $translatedDefaultValue =  array(
            array(
                'label'       => sprintf( $colibriwp_theme_action_button, 1 ),

            ),
            array(
                'label'       => sprintf( $colibriwp_theme_action_button, 2 ),

            ),
        );
        $defaultValueArr = json_decode($defaultValue, true);
        if(is_array($defaultValueArr)) {
            foreach($defaultValueArr as $key => $value) {
                if(isset($value['label']) && isset($translatedDefaultValue[$key]) && isset($translatedDefaultValue[$key]['label'])) {
                    $defaultValueArr[$key]['label'] = $translatedDefaultValue[$key]['label'];
                }
            }
        }
        $defaultValue = json_encode($defaultValueArr);
		return array(
			"sections" => array(
				"{$prefix}section" => array(
					'title'  => Translations::get( 'buttons' ),
					'panel'  => 'header_panel',
					'type'   => 'colibri_section',
					'hidden' => true
				)
			),

			"settings" => array(
				"{$prefix}show"  => array(
					'default'   => Defaults::get( "{$prefix}show" ),
					'transport' => 'refresh',
					'control'   => array(
						'label'       => Translations::get( 'buttons' ),
						'type'        => 'switch',
						'show_toggle' => true,
						'section'     => "hero",
						'colibri_tab' => 'content',
					),

				),
				"{$prefix}value" => array(
					'default' => Defaults::get( "{$prefix}value" ),
					'control' => array(
						'label'          => Translations::get( 'buttons' ),
						'type'           => 'repeater',
						'input_type'     => 'textarea',
						'section'        => "{$prefix}section",
						'colibri_tab'    => 'content',
						'item_add_label' => Translations::get( 'add_button' ),
						'max'            => 2,
						'min'            => 1,
						'fields'         => array(
							'label' => array(
								'type'    => 'text',
								'label'   => Translations::get( 'label' ),
								'default' => Translations::get( 'button' ),
							),

							'url' => array(
								'type'    => 'text',
								'label'   => Translations::get( 'link' ),
								'default' => '#',
							),

							'button_type' => array(
								'type'    => 'select',
								'label'   => Translations::get( 'button_type' ),
								'default' => '0',
								'props'   => array(
									'options' => array(
										'0' => Translations::escHtml( "primary_button" ),
										'1' => Translations::escHtml( "secondary_button" ),
									),
								)
							),
						)
					),
				),

				"{$prefix}style.textAlign" => array(
					'default'    => Defaults::get( "{$prefix}style.textAlign" ),
					'control'    => array(
						'label'       => Translations::escHtml( "align" ),
						'type'        => 'align-button-group',
						'button_size' => 'medium',
						//labels are used as values for align-button-group
						'choices'     => array(
							'left'   => 'left',
							'center' => 'center',
							'right'  => 'right',
						),
						'none_value'  => 'flex-start',
						'section'     => "{$prefix}section",
						'colibri_tab' => "content",
					),
					'css_output' => array(
						array(
							'selector' => static::selectiveRefreshSelector(),
							'media'    => CSSOutput::NO_MEDIA,
							'property' => 'text-align',
						),
					),
				),
			),
		);
	}

	public static function selectiveRefreshSelector() {
		return Defaults::get( static::$settings_prefix . 'selective_selector', false );
	}

	public function getPenPosition() {
		return static::PEN_ON_RIGHT;
	}

	public function renderContent() {

		if ( $this->mod( static::$settings_prefix . 'show' ) ) {
			View::partial( 'front-header', 'button_group', array(
				"component" => $this,
			) );
		}
	}

	public function printButtons() {

		if ( get_theme_mod( static::$settings_prefix . "value", false ) || is_user_logged_in() ) {
			$buttons = $this->mod( static::$settings_prefix . "value", array() );
		} else {
			$latest_posts = wp_get_recent_posts( array( 'numberposts' => 2, 'post_status' => 'publish' ) );
			$buttons      = array();
			$button_index = 0;
			foreach ( $latest_posts as $id => $post ) {
				$buttons[] = array(
					'label'       => get_the_title( $post['ID'] ),
					'url'         => get_post_permalink( $post['ID'] ),
					'button_type' => $button_index,
					'index'       => $button_index,
				);
				$button_index ++;
			}
		}

		foreach ( $buttons as $button ) {
			$type = array_key_exists( 'button_type', $button ) ? $button['button_type'] : 0;
			View::partial( 'front-header', "buttons/button-{$type}", $button );
		}
	}
}

