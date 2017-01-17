<?php

$auditIni = eZINI::instance( 'audit.ini'  );
$ini = eZINI::instance();
$auditPath = $ini->variable( 'FileSettings', 'VarDir' ) . '/' . $auditIni->variable( 'AuditSettings', 'LogDir' ) . '/';

$subject= file_get_contents( $auditPath . $Params['FileName']);
$pattern = '/^(\[.*?)$^\s*$^/xms';
preg_match_all($pattern, $subject, $matches);
krsort($matches[1]);

$content_logfile = "";
foreach ($matches[1] as $match)
{
	$content_logfile .= "<pre>" . $match . "</pre>";
}

$tpl = eZTemplate::factory();
$tpl->setVariable( 'logfile_name', $Params['FileName'] );
$tpl->setVariable( 'content_logfile', $content_logfile );
$Result = array();
$Result['content'] = $tpl->fetch( "design:auditlog/full.tpl" );
$Result['path'] = array ( array ('url' => 'auditlog/full',
								'$text' => "full") );
$Result['path'] = array(array( 'url' => false,
                               'text' => ezpI18n::tr( 'extension/aplauditlog', 'Aplauditlog' ) ),
                        array( 'url' => false,
                               'text' => $Params['FileName']) );
?>