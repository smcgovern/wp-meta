<?php
// register menus	
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}
add_action('init', 'register_my_menus');

// register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// default acf fields
if(function_exists('register_field_group'))
{
	register_field_group(array (
		'id' => 'acf_seo',
		'title' => 'SEO',
		'fields' => array (
			array (
				'key' => 'field_554e6c368d0c4',
				'label' => 'Title',
				'name' => 'seo_title',
				'type' => 'text',
				'instructions' => 'Note: If this is blank, it we default to the page title above, this is for overriding the default title.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554e6c5b8d0c5',
				'label' => 'Description',
				'name' => 'seo_description',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554e6c718d0c6',
				'label' => 'Keywords',
				'name' => 'seo_keywords',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
