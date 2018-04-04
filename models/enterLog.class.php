<?php
class EnterLog{
    private $id, $content, $date, $name;
    public function __construct($id, $content, $date, $name){
        $this->id = $id;
        $this->content = $content;
        $this->date = $date;
        $this->name = $name;
    }
    public function getID(){
        return $this->id;
    }
    public function getContent(){
        return $this->content;
    }
    public function getDate(){
        return $this->date;
    }
    public function getName(){
        return $this->name;
    }
}
