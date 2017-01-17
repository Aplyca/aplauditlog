<?php 
$Module = array("name" => "auditlog");

$ViewList = array();

$ViewList["list"] = array('script' => "list.php",
						'ui_context' => 'administration',
						'default_navigation_part' => 'ezsetupnavigationpart',
						'functions' => array('audit'),
						'functions' => array('audit'));
			     
$ViewList["full"] = array('script' => "full.php",
						'ui_context' => 'administration',
						'default_navigation_part' => 'ezsetupnavigationpart',
						'functions' => array('audit'),
						'params' => array('FileName') );

$ViewList["download"] = array('script' => "download.php",
						'ui_context' => 'administration',
						'default_navigation_part' => 'ezsetupnavigationpart',
						'functions' => array('audit'),
						'params' => array('FileName') );

$SiteAccess = array('name'=> 'SiteAccess',
					'values'=> array(),
					'path' => 'classes/',
					'file' => 'ezsiteaccess.php',
					'class' => 'eZSiteAccess',
					'function' => 'siteAccessList',
					'parameter' => array());			   
			   
$FunctionList['audit'] = array('SiteAccess' => $SiteAccess );





?>
