<?php

return array(
	'id'          => 'vp_meta_sample_7',
	'types'       => array('post'),
	'title'       => __('VP HTML Binding', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type'      => 'group',
			'repeating' => false,
			'name'      => 'html_binding_group',
			'title'     => __('Typography', 'vp_textdomain'),
			'fields'    => array(
				array(
					'type' => 'html',
					'name' => 'logo_font_preview',
					'binding' => array(
						'field'    => 'logo_font_face,logo_font_style,logo_font_weight,logo_font_size',
						'function' => 'vp_font_preview',
					),
				),
				array(
					'type' => 'select',
					'name' => 'logo_font_face',
					'label' => __('Logo Font Face', 'vp_textdomain'),
					'description' => __('Select Font', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value' => 'vp_get_gwf_family',
							),
						),
					),
					'default' => '{{first}}'
				),
				array(
					'type' => 'radiobutton',
					'name' => 'logo_font_style',
					'label' => __('Logo Font Style', 'vp_textdomain'),
					'description' => __('Select Font Style', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'binding',
								'field' => 'logo_font_face',
								'value' => 'vp_get_gwf_style',
							),
						),
					),
					'default' => array(
						'{{first}}',
					),
				),
				array(
					'type' => 'radiobutton',
					'name' => 'logo_font_weight',
					'label' => __('Logo Font Weight', 'vp_textdomain'),
					'description' => __('Select Font Weight', 'vp_textdomain'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'binding',
								'field' => 'logo_font_face',
								'value' => 'vp_get_gwf_weight',
							),
						),
					),
				),
				array(
					'type'    => 'slider',
					'name'    => 'logo_font_size',
					'label'   => __('Logo Font Size', 'vp_textdomain'),
					'min'     => '5',
					'max'     => '32',
					'default' => '16',
				)
			),
		),
	),
);

/**
 * EOF
 */