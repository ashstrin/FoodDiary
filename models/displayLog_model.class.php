<?php
class DisplayLogModel{
    private $db;
    private $db_connection;
    private $_instance = NULL;
    private $num = 15;
    public function __construct(){
        $this->db = Database::getDatabase();
        $this->db_connection = Database::getConnection();
    }
    public function getDisplayLogModel(){
        if (self::$_instance == NULL) {
            self::$_instance = new DisplayLogModel();
        }
        return self::$_instance;
    }
    public function display($num){
        $sql = "SELECT * FROM food_log LIMIT $num";
        $query = $this->db_connection->query($sql);
        
        if (!$query){
            throw new DatabaseException();
            }
        elseif ($query->num_rows == 0){
            return 0;
            }
        else{
            while($obj = $query->fetch_object()){
                
                }
            }
        }
    }