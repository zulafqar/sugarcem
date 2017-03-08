<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetCurrentTime{


    public function getTime($bean, $event, $arguments){
        $bean->current_time_c = date("h:i a",time());
        $GLOBALS['log']->debug('Current time logic_hook for bean '. $bean->name);
        $bean->save();
    }

}