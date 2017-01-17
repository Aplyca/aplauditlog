<?php

class AplLogAfterPublishType extends eZWorkflowEventType
{
	const WORKFLOW_TYPE_STRING = "apllogafterpublish";

    function AplLogAfterPublishType()
    {
        $this->eZWorkflowEventType( AplLogAfterPublishType::WORKFLOW_TYPE_STRING, ezpI18n::tr( 'kernel/workflow/event', 'Log After Publish' ) );
        $this->setTriggerTypes( array( 'content' => array( 'publish' => array ( 'after' ) ) ) );
    }

    function execute( $process, $event )
    {
        $parameters = $process->attribute( 'parameter_list' );
		$versionID =& $parameters['version'];
        $object =& eZContentObject::fetch( $parameters['object_id'] );
        
		include_once( 'lib/ezutils/classes/ezini.php' );
		include_once( 'kernel/common/template.php' );

		$owner =  eZContentObject::fetch( $object->attribute('owner_id') ); 

		eZAudit::writeAudit( 'content-publish', array('Object ID' => $object->ID,
													 'Object name' => $object->attribute('name'),
													 'Version'   => $object->attribute('current_version')
							  ) );

        return eZWorkflowType::STATUS_ACCEPTED;
    }
}

eZWorkflowEventType::registerEventType( AplLogAfterPublishType::WORKFLOW_TYPE_STRING, 'AplLogAfterPublishType' );

?>
