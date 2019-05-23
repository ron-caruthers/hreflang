<?php

$theUrl = get_bloginfo('url');

if ( ($theUrl === 'http://canstar.com.au')
	|| ($theUrl === 'http://gold.local')
	|| ($theUrl === 'http://uat-new.canstar.com.au')
	|| ($theUrl === 'http://cns-gold-uat-2.elasticbeanstalk.com')
	|| ($theUrl === 'http://cns-gold-uat-3.elasticbeanstalk.com') ) {
	$url = 'http://www.canstar.co.nz/';
	$msg = 'Go to the NZ page now and link back to this AU page in the hreflang section.';
	$msg_url = 'canstar.co.nz';
} else {
	$url = 'http://www.canstar.com.au/';
	$msg = 'Go to the AU page now and link back to this NZ page in the hreflang section.';
	$msg_url = 'canstar.com.au';
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56e6592c7ca82',
	'title' => 'hreflang',
	'fields' => array (
		array (
			'key' => 'field_56e65deaa93a2',
			'label' => 'Add hreflang',
			'name' => 'add_hreflang',
			'type' => 'true_false',
			'instructions' => 'Click to add hreflang link to same content on '.$msg_url.'.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Does this post appear on '.$msg_url.'?',
			'default_value' => 0,
		),
		array (
			'key' => 'field_56e65e5aa93a3',
			'label' => 'hreflang URL',
			'name' => 'hreflang_url',
			'type' => 'text',
			'instructions' => 'IMPORTANT: A reciprocal link is mandatory. '.$msg ,
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_56e65deaa93a2',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => $url,
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_format',
				'operator' => '==',
				'value' => 'standard',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>
