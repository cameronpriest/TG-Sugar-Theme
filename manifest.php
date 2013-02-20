<?php
$manifest = array (
	'acceptable_sugar_versions' => array(
		'exact_matches' => array(),
		'regex_matches' => array(
			0 => '6\.5\.\d(beta\d|RC\d|[a-z])?',
		),
	),
	'acceptable_sugar_flavors' => array(
		0 => 'CE',
		1 => 'PRO',
	),
	'name' => 'TradeGecko mod of Modern Aqua',
	'description' => 'TradeGecko SugarCRM theme',
	'author' => 'TradeGecko and CogniTom Academic Design',
	'published_date' => '2012-02-20 0:12:00',
	'version' => '0.6.1',
	'type' => 'theme',
	'is_uninstallable' => TRUE,
	'icon' => 'images/Themes.gif',
	'copy_files' => array(
		'from_dir' => 'TGModTheme',
		'to_dir' => 'themes/TGModTheme',
		'force_copy' => array(),
	),
);
?>
