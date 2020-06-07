<?php

namespace RunCloud;

abstract class Plan
{
    public $planName;
    public $servers;
    abstract protected function setServers();

    public function __construct()
    {
        $this->planName = get_class($this);
        $this->setServers();
    }
}

class BasicPlan extends Plan
{
    protected function setServers()
    {
        $this->servers = 1;
    }

    function __construct()
    {
        parent::__construct();
    }

    /*
     * Other Basic Plan Benefits
     */
    
}

/** Pro Plan includes everything in Basic */
class ProPlan extends BasicPlan
{
    protected function setServers()
    {
        $this->servers = 1000; // Unlimited servers (represented by high value)
    }

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Additional Pro Plan Benefits
     */
}

/** Business Plan includes everything in Pro and Basic */
class BusinessPlan extends ProPlan
{
    /**
     * Additional Business Plan Benefits 
     */
}
