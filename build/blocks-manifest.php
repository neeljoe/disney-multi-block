<?php
// This file is generated. Do not modify it manually.
return array(
	'search-panel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'disney/search-panel',
		'version' => '0.1.0',
		'title' => 'Search Panel',
		'category' => 'widgets',
		'icon' => 'search',
		'description' => 'Sliding search panel that appears when the search toggle is clicked. Uses the Interactivity API.',
		'example' => array(
			
		),
		'supports' => array(
			'interactivity' => true
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'search-toggle' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'disney/search-toggle',
		'version' => '0.1.0',
		'title' => 'Search Toggle',
		'category' => 'widgets',
		'icon' => 'search',
		'description' => 'Search toggle button that opens a sliding search panel. Uses the Interactivity API.',
		'example' => array(
			
		),
		'supports' => array(
			'interactivity' => true
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'sites-dropdown' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'disney/sites-dropdown',
		'version' => '0.1.0',
		'title' => 'Sites Dropdown',
		'category' => 'widgets',
		'icon' => 'menu',
		'description' => 'A mega menu dropdown for the SITES navigation item. Uses the Interactivity API.',
		'example' => array(
			
		),
		'attributes' => array(
			'label' => array(
				'type' => 'string',
				'default' => 'SITES'
			),
			'menuSlug' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'supports' => array(
			'interactivity' => true,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true
			)
		),
		'parent' => array(
			'core/navigation'
		),
		'textdomain' => 'advanced-multi-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	)
);
