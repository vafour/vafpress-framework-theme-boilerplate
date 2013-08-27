<?php

/**
 * Load Languages
 */
$lang_dir = get_template_directory() . '/lang';
load_theme_textdomain('vp_textdomain', $lang_dir);

/**
 * Include Vafpress Framework
 */
require_once 'vafpress-framework/bootstrap.php';

/**
 * Include Custom Data Sources
 */
require_once 'admin/data_sources.php';

/**
 * Load options, metaboxes, and shortcode generator array templates.
 */

// options
$tmpl_opt  = get_template_directory() . '/admin/option/option.php';

// metaboxes
$tmpl_mb1  = get_template_directory() . '/admin/metabox/sample_1.php';
$tmpl_mb2  = get_template_directory() . '/admin/metabox/sample_2.php';
$tmpl_mb3  = get_template_directory() . '/admin/metabox/sample_3.php';
$tmpl_mb4  = get_template_directory() . '/admin/metabox/sample_4.php';
$tmpl_mb5  = get_template_directory() . '/admin/metabox/sample_5.php';
$tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
$tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
$tmpl_mb7  = get_template_directory() . '/admin/metabox/sample_7.php';
$tmpl_mb8  = get_template_directory() . '/admin/metabox/sample_8.php';

// shortocode generators
$tmpl_sg1  = get_template_directory() . '/admin/shortcode_generator/shortcodes1.php';
$tmpl_sg2  = get_template_directory() . '/admin/shortcode_generator/shortcodes2.php';

/**
 * Create instance of Options
 */
$theme_options = new VP_Option(array(
	'is_dev_mode'           => false,                                  // dev mode, default to false
	'option_key'            => 'vpt_option',                           // options key in db, required
	'page_slug'             => 'vpt_option',                           // options page slug, required
	'template'              => $tmpl_opt,                              // template file path or array, required
	'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
	'use_auto_group_naming' => true,                                   // default to true
	'use_exim_menu'         => true,                                   // default to true, shows export import menu
	'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
	'layout'                => 'fixed',                                // fluid or fixed, default to fixed
	'page_title'            => __( 'Theme Options', 'vp_textdomain' ), // page title
	'menu_label'            => __( 'Theme Options', 'vp_textdomain' ), // menu label
));

/**
 * Create instances of Metaboxes
 */
$mb1 = new VP_Metabox($tmpl_mb1);
$mb2 = new VP_Metabox($tmpl_mb2);
$mb3 = new VP_Metabox($tmpl_mb3);
$mb4 = new VP_Metabox($tmpl_mb4);
$mb5 = new VP_Metabox($tmpl_mb5);
$mb6 = new VP_Metabox($tmpl_mb6);
$mb7 = new VP_Metabox($tmpl_mb7);
$mb8 = new VP_Metabox($tmpl_mb8);

/**
 * Create instances of Shortcode Generator
 */
$tmpl_sg1 = array(
	'name'           => 'sg_1',                                        // unique name, required
	'template'       => $tmpl_sg1,                                     // template file or array, required
	'modal_title'    => __( 'Vafpress Shortcodes 1', 'vp_textdomain'), // modal title, default to empty string
	'button_title'   => __( 'Vafpress', 'vp_textdomain'),              // button title, default to empty string
	'types'          => array( 'post', 'page' ),                       // at what post types the generator should works, default to post and page
	'included_pages' => array( 'appearance_page_vpt_option' ),         // or to what other admin pages it should appears
);
$tmpl_sg2 = array(
	'name'           => 'sg_2',
	'template'       => $tmpl_sg2,
	'modal_title'    => __( 'Vafpress Shortcodes 2', 'vp_textdomain'),
	'button_title'   => __( 'Vafpress', 'vp_textdomain'),
	'types'          => array( 'post', 'page' ),
	'main_image'     => get_template_directory_uri() . '/public/img/vp_shortcode_icon.png',
	'sprite_image'   => get_template_directory_uri() . '/public/img/vp_shortcode_icon_sprite.png',
);

$sg1 = new VP_ShortcodeGenerator($tmpl_sg1);
$sg2 = new VP_ShortcodeGenerator($tmpl_sg2);

/*
 * EOF
 */