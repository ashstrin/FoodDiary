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
    public function listLog($num){
        $sql = "SELECT * FROM food_log LIMIT $num";
        $query = $this->db_connection->query($sql);
        
        if (!$query){
            throw new DatabaseException();
            }
        elseif ($query->num_rows == 0){
            return 0;
            }
        else{
            $logs = array();
            while($obj = $query->fetch_object()){
                $log = new EnterLog();
                $logs[] = $log;
                }
                return $logs;
            }
        }
        public function viewEntry($logID){
            $qurty = "SELECT * FROM food_log WHERE id='$logID'";
            $this->db_connection->query($query);
            while($obj = $query->fetch_object()){
                $log = new EnterLog();
                return $log;
            }
        }
    }