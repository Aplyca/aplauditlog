<?php

$auditIni = eZINI::instance( 'audit.ini'  );
$ini = eZINI::instance();
$auditPath = $ini->variable( 'FileSettings', 'VarDir' ) . '/' . $auditIni->variable( 'AuditSettings', 'LogDir' ) . '/';


if ($handle = opendir($auditPath)) 
{
	$logfiles=array();
	while (false !== ($file = readdir($handle))) 
	{
		if (is_file($auditPath.$file))
		{
			array_push($logfiles, $file);
		}
	}
	closedir($handle);
}
sort($logfiles);

$tpl = eZTemplate::factory();
$tpl->setVariable( 'logfiles', $logfiles );

$Result = array();
$Result['content'] = $tpl->fetch( "design:auditlog/list.tpl" );
$Result['path'] = array( array( 'url' => false,
                                'text' => ezpI18n::tr( 'extension/aplauditlog', 'Aplauditlog' ) ),
                         array( 'url' => false,
                                'text' => ezpI18n::tr( 'extension/aplauditlog', 'List' ) ) );
?>

