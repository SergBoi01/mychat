<?php

Class Database{

    private $con;

    //construct
    function __construct() {
         $this->con = $this->connect();
    }


    // coonnect to db
    private function connect(){
        $string = "mysql:host=localhost;mychat_db";

        try {
            $connection = new PDO($string, DBUSER, DBPASS);
            return $connection;
        } catch(PDOException $e ) {
            echo $e->getMessage();
            die;
        }
        return false;
    }

    //write to database
    public function write($query, $data_array = []){
        $con = $this->connect();
        $statement = $con->prepare($query);

        foreach ($data_array as $key => $value) {
            $statement->bindParam(':'.$key, $value);
        }
        $check = $statement->execute();
        if ($check){
            return true;
        } 
        return false;

    }
}
