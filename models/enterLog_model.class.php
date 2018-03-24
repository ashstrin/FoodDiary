<?php
class EnterLogModel{
    private $db;
    private $db_connection;
    private $_instance = NULL;
    
    public function __construct(){
        $this->db = Database::getDatabase();
        $this->db_connection = Database::getConnection();
    }
}