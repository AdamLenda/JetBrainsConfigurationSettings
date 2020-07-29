<?php
#if (${NAMESPACE})namespace ${NAMESPACE};
#end
use JVZoo\Framework\Logging\LogServiceProviderInterface;
use JVZoo\Framework\Logging\LogServiceProviderTrait;

class ${NAME} implements LogServiceProviderInterface
{
    use LogServiceProviderTrait;
    
    public function __construct()
    {
    }
}