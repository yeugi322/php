<?php 

    // $db_server = "localhost";
    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "businessdb";
    // $conn = "";

    // try{
    //     $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    // }
    // catch(mysqli_sql_exception){
    //     echo"Could not connect to database! <br>";
    // }
    
    class Database {
        public $connection;

        public function __construct($config){
            

            $dsn = 'mysql:' . http_build_query($config, '', ';');
            
            $this->connection = new PDO($dsn, 'root', '',
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        public function query($query){
             $statement = $this->connection->prepare($query);
             $statement->execute();

             return $statement;
        }
    }
