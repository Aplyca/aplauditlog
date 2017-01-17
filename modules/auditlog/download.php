<?php

$auditIni = eZINI::instance( 'audit.ini'  );
$ini = eZINI::instance();
$auditPath = $ini->variable( 'FileSettings', 'VarDir' ) . '/' . $auditIni->variable( 'AuditSettings', 'LogDir' ) . '/';

eZFile::download( $auditPath . $Params['FileName'] );

?>
