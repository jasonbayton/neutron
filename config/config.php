<?php
	$settings = array(
			'sitename' => 'Neutron',
			'siteurl' => 'http://neutron.bayton.org',
			'sitepath' => $_SERVER['DOCUMENT_ROOT'],
			'theme' => 'docs',
			'copyright' => '&copy; 2008-<?php echo date("Y") ?>',

		/* Do not edit below */

			'themedir' => '/themes/',
		       );

$currenturl = $_SERVER['REQUEST_URI'];
require_once $settings ["sitepath"] . '/vendor/autoload.php';
?>
