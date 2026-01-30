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
        public $statement;

        public function __construct($config){
            
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            
            $this->connection = new PDO($dsn, 'root', '',
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        public function query($query, $params = []){
             $this->statement = $this->connection->prepare($query);
             $this->statement->execute($params);

             return $this;
        }

        public function find(){
            return $this->statement->fetch();
        }
        public function findAll(){
            return $this->statement->fetchAll();
        }
        public function findOrFail(){
            $result = $this->find();

            if(! $result){
                abort(Response::NOT_FOUND);
            } 
            return $result;
        }
    }
