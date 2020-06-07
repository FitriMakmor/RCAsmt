<?php

namespace RunCloud;

class User
{
    public $name;
    private $currentPlan;
    private $runningServers;

    public function __construct()
    {
        $runningServers = 0;
    }

    public function subscribe($plan)
    {
        print "Subscribing to ".$plan->planName." as ".$this->name."...\n";
        $this->currentPlan = $plan;
        print "You are now subscribed to ".$this->currentPlan->planName."!\n";
    }

    public function connectServer($server)
    {
        print "Attempting to initiate server connection (".$server->name.")...\n";
        if ($this->currentPlan == null) {
            print "Unable to initiate server connection: You are currently not subscribed to any plan.\n";
        }
        else if ($this->runningServers < $this->currentPlan->servers) {
            print "New server connection initiated! (".$server->name." at IP Address: ".$server->ipAddress.")\n";
            $this->runningServers++;
        }else{
            print "Maximum server limit reached! Please consider upgrading your subscription.\n";
        }
    }

    public function unsubscribe()
    {
        if ($this->currentPlan != null) {
            print "Unsubscribing from ".$this->currentPlan->planName."...\n";
            $this->runningServers = 0;
            $this->currentPlan = null;
            print "You have cancelled your subscription.\n";
        } else {
            print "You are currently not subscribed to any plans!\n";
        }
    }
}
