<?php

// require_once("../includes/new_config.php");

class Database{

	public  $connection;

	function __construct(){

		$this->open_db_connection();
		
	}

    public function open_db_connection(){   

        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if($this->connection->connect_errno){
        	die("Failed to connect to the database".$this->connection->connect_error);
        }else{
        	// echo "Connected";
        }
    }

    public function query($sql){
    	$result = $this->connection->query($sql);
        $this->confirm_query($result);
    	return $result;
    }

    private function confirm_query($result){
    	if(!$result){
    		die("Query Failed" . $this->connection->error);
    	}
    }

    public function escape_string($string){
    	$escaped_string = $this->connection->mysql_real_escape_string($string);	
    	return $escaped_string;
    }

    public function insert_id(){

        return $this->connection->insert_id;

    }







}

$database = new Database();

// Start from video 31

	
?>