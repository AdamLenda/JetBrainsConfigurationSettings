<?php
#if (${NAMESPACE})namespace ${NAMESPACE};#end

use \JVZoo\Framework\Logging\LogServiceProviderInterface;
use \JVZoo\Framework\Logging\LogServiceProviderTrait;
#set( ${ServiceClassName} = "${NAME}Service")
#set( ${DataAccessClassName} = "${NAME}DataAccess")
#set( ${DataAccessParameterName} = "$${NAME}DataAccessParameter")
#set( ${DataAccessMemberName} = "\$this->${NAME}DataAccessMember")
 
class ${ServiceName} implements LogServiceProviderInterface 
{
    use LogServiceProviderTrait;
    
    public function __construct(
        ${DataAccessClassName} ${DataAccessParameterName}
    ){
        ${DataAccessMemberName} = ${DataAccessParameterName};
    }
}