<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/**
 * Divi Geo Module
 *
 * @link       https://geotargetingwp.com/geotargeting-pro
 * @since      1.6.3
 *
 * @package    GeoTarget
 * @subpackage GeoTarget/includes
 * @author     Damian Logghe
 */
class Divi_GeoRadius {

	/**
	 * Add the actual fields
	 *
	 * @return array
	 */
	static function get_fields() {

		$fields['radius_mode'] = [
			'label'				=> esc_html__( 'Visibility', 'geot' ),
			'type'				=> 'select',
			'options'           => [
				'include'	=> esc_html__( 'Show', 'geot' ),
				'exclude'	=> esc_html__( 'Hide', 'geot' ),
			],
			'option_category'	=> 'configuration',
			'toggle_slug'		=> 'radius',
			'tab_slug'			=> 'geot',
		];

		$fields['radius_km'] = [
			'label'				=> esc_html__( 'Radius (Km)', 'geot' ),
			'type'				=> 'number',
			'default_unit'		=> 'km',
			'option_category'	=> 'configuration',
			'attributes'		=> [
				'placeholder'	=> '100',
				'step'			=> 1,
			],
			'toggle_slug'		=> 'radius',
			'tab_slug'			=> 'geot',
			'allowed_units'		=> ['km']
		];
		
		$fields['radius_lat'] = [
			'label'           => esc_html__( 'Latitude', 'geot' ),
			'type'            => 'number',
			'option_category' => 'configuration',
			'attributes'		=> [ 'step' => 0.0000001 ],
			'toggle_slug'		=> 'radius',
			'tab_slug'        => 'geot',
		];
		
		$fields['radius_lng'] = [
			'label'				=> esc_html__( 'Longitude', 'geot' ),
			'type'				=> 'number',
			'option_category'	=> 'configuration',
			'attributes'		=> [ 'step' => 0.0000001 ],
			'toggle_slug'		=> 'radius',
			'tab_slug'			=> 'geot',
		];

		return $fields;
	}


	/**
	 * Add the actual fields
	 *
	 * @return array
	 */
	static function is_render( $settings ) {

		$radius_km	= isset( $settings['radius_km'] ) ? trim( $settings['radius_km'] ) : '';
		$radius_lat = isset( $settings['radius_lat'] ) ? trim( $settings['radius_lat'] ) : '';
		$radius_lng = isset( $settings['radius_lng'] ) ? trim( $settings['radius_lng'] ) : '';
		$radius_mode = !empty( $settings['radius_mode'] ) ? trim( $settings['radius_mode'] ) : 'include';

		if ( empty( $radius_km ) || empty( $radius_lat ) || empty( $radius_lng ) )
			return true;

		$target = geot_target_radius( $radius_lat, $radius_lng, $radius_km );
		return $radius_mode == 'include' ? $target : ! $target;
	}


	/**
	 * if is ajax, apply render
	 *
	 * @return array
	 */
	static function ajax_render( $settings, $output ) {

		$radius_km	= isset( $settings['radius_km'] ) ? $settings['radius_km'] : '';
		$radius_lat = isset( $settings['radius_lat'] ) ? $settings['radius_lat'] : '';
		$radius_lng = isset( $settings['radius_lng'] ) ? $settings['radius_lng'] : '';
		$radius_mode = !empty( $settings['radius_mode'] ) ? trim( $settings['radius_mode'] ) : 'include';

		if ( empty( $radius_km ) || empty( $radius_lat ) || empty( $radius_lng ) ) {
			return $output;
		}

		return '<div class="geot-ajax geot-filter" data-geo_mode="'. $radius_mode .'" data-action="radius_filter" data-filter="' . $radius_km . '" data-region="' . $radius_lat . '" data-ex_filter="' . $radius_lng . '">' . do_shortcode( $output ) . '</div>';
	}


	/**
	 * Recover depreciate fields
	 * @param  array $module_props
	 * @param  array $attrs
	 * @return array
	 */
	static function recover_fields( $module_props = [], $attrs = [] ) {

		// New fields
		if( isset( $attrs['radius_mode'] ) )
			$module_props['radius_mode'] = $attrs['radius_mode'];

		if( isset( $attrs['radius_km'] ) )
			$module_props['radius_km'] = $attrs['radius_km'];

		if( isset( $attrs['radius_lat'] ) )
			$module_props['radius_lat'] = $attrs['radius_lat'];

		if( isset( $attrs['radius_lng'] ) )
			$module_props['radius_lng'] = $attrs['radius_lng'];

		return $module_props;
	}

}