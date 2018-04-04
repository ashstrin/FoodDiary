<?php
class EnterLogModel{
    private $db;
    private $db_connection;
    private $_instance = NULL;
    private $tblFoodLog;
    
    public function __construct(){
        $this->db = Database::getDatabase();
        $this->db_connection = Database::getConnection();
        $this->tblFoodLog = Database::getTblFoodLog();
    }
    
    public function add(){
        $query = "INSERT INTO " . $this->tblFoodLog . " (`content`, `date`, `name`)"
                . "VALUES($content, $date, $name)";
        $this->db_connection->query($query);
    }
    
}