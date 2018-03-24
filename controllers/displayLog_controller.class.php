<?php
class DisplayLogController{
    private $displaylog_model;
    public function __construct(){
        $this->displaylog_model = DisplayLogModel::getDisplayLogModel();
    }
}
