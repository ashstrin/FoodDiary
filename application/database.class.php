<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Database{
    private $objDBConnection = NULL;
    private $_instance = NULL;
    private $param = array(
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'FoodContentDB', 
        'tblFoodLog' => 'food_log'
    );
    public function __construct(){
        $this->objDBConnection = new mysqli($this->param['host'],$this->param['login'],$this->param['password'], $this->param['database']);
        if (mysqli_connect_errno() != 0) {
            $message = "Connecting database failed: " . mysqli_connect_error() . ".";
           // throw new DatabaseException($message);
           // include 'error.php';
            exit();
            }
        }
    public function getConnection(){
        return $this->objDBConnection;
    }
    public function getDatabase(){
        if (self::$_instance == NULL){
            self::$_instance = new Database();
            return self::$_instance;
        }
    }
    public function getTblFoodLog(){
        return $this->param['tblFoodLog'];
    }
}
