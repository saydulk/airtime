<?php

class Airtime_View_Helper_SourceConnectionStatus extends Zend_View_Helper_Abstract{
    public function SourceConnectionStatus(){
        $status = array("live_dj"=>Application_Model_Preferences::GetSourceStatus("live_dj"), "master_dj"=>Application_Model_Preferences::GetSourceStatus("master_dj"));
        return $status;
    }
}