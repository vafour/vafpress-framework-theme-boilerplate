<?php

return array(
	'id'          => 'vp_meta_sample_8',
	'types'       => array('post'),
	'title'       => __('VP Metabox on The Sidebar', 'vp_textdomain'),
	'priority'    => 'high',
	'context'     => 'side',
	'template'    => array(

		array(
			'type' => 'notebox',
			'name' => 'notebox',
			'label' => __('Normal Announcement', 'vp_textdomain'),
			'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'vp_textdomain'),
			'status' => 'normal',
		),
		array(
			'type' => 'textbox',
			'name' => 'textbox',
			'label' => __('Textbox Field', 'vp_textdomain'),
			'description' => __('Lorem ipsum dolor sit amet', 'vp_textdomain'),
		),
		array(
			'type' => 'checkbox',
			'name' => 'checkbox',
			'label' => __('Checkbox Field', 'vp_textdomain'),
			'items' => array(
				array(
					'value' => 'item-1',
					'label' => 'item-1',
				),
				array(
					'value' => 'item-2',
					'label' => 'item-2',
				),
				array(
					'value' => 'item-3',
					'label' => 'item-3',
				),
				array(
					'value' => 'item-4',
					'label' => 'item-4',
				),
			),
		),
		array(
			'type' => 'radiobutton',
			'name' => 'radiobutton',
			'label' => __('Radiobutton Field', 'vp_textdomain'),
			'items' => array(
				array(
					'value' => 'item-1',
					'label' => 'item-1',
				),
				array(
					'value' => 'item-2',
					'label' => 'item-2',
				),
				array(
					'value' => 'item-3',
					'label' => 'item-3',
				),
				array(
					'value' => 'item-4',
					'label' => 'item-4',
				),
			),
		),
		array(
			'type' => 'select',
			'name' => 'select',
			'label' => __('Select Field', 'vp_textdomain'),
			'items' => array(
				array(
					'value' => 'item-1',
					'label' => 'item-1',
				),
				array(
					'value' => 'item-2',
					'label' => 'item-2',
				),
				array(
					'value' => 'item-3',
					'label' => 'item-3',
				),
				array(
					'value' => 'item-4',
					'label' => 'item-4',
				),
			),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'group',
			'title'     => __('Group', 'vp_textdomain'),
			'fields'    => array(
				array(
					'type' => 'textbox',
					'name' => 'gr_textbox',
					'label' => __('Textbox Field', 'vp_textdomain'),
				),
				array(
					'type' => 'textarea',
					'name' => 'gr_textarea',
					'label' => __('Textarea Field', 'vp_textdomain'),
				),
			),
		),
	),
);

/**
 * EOF
 */