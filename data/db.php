<?php
    class DBConnect{
        private static $instance = null;
        private $connection;
        private $server_name;
        private $user_name;
        private $password;
        private $database_name;

        private function __construct( ){
            $this->connection = mysqli_connect( $this->server_name, $this->user_name, $this->password, $this->database_name );
        }

        private static function get_DB_connect(){
            if($this->instance == null){
                $this->instance = new DBConnect();
            }

            return $this->instance;
        }

        public function get_connection(){
            return $this->connection;
        }

        function insert( $tableName, $table ){
            $querry = "INSERT INTO ".$tableName." (";
            foreach( $table as $key => $value ){
                $querry = $querry.$key.",";
            }
            $querry{strlen($querry) - 1} = ")";
            $querry = $querry."VALUES (";
            foreach( $table as $key => $value ){
                if($value == ''){
                    $value = 'NULL';
                }
                $querry = $querry."'".$value."',";
            }
            $querry{strlen($querry) - 1} = ")";
            
            
            $result = mysqli_query( $this->connection, $querry );
            return $result;
        }

        function getTableData( $tableName, $condition=false ){
		
            $querry = "SELECT * FROM ".$tableName;
            if( $condition )
                $querry = $querry . " WHERE ".$condition;
            //print_r($querry);
            
            $result = mysqli_query( $this->connection, $querry);
            if( !$result )
                return false;
            $table = array();
            for( $i=0; $row = mysqli_fetch_assoc($result); ++$i )
                $table[$i] = $row;
            
            return $table;
        }
        
        function getTableDataObj( $tableName, $condition = false ){
            $querry = "SELECT * FROM ".$tableName;
            if( $condition )
                $querry = $querry . " where ".$condition;
            //print_r($querry);
            
            $result = mysqli_query( $this->connection, $querry);
            if( !$result )
                return false;
            $table = array();
            for( $i=0; $obj = mysqli_fetch_object($result); ++$i ){
                $table[$i] = $obj;
            }
            
            return $table;
        }

        function updateTable( $tableName, $table, $condition ){
            $querry = "UPDATE ".$tableName." SET ";
            
            foreach( $table as $key => $value ){
                $querry = $querry.$key." = '".$value."', ";
            }
            $querry{strlen($querry) - 2} = " ";
                $querry = $querry."WHERE ".$condition;
            
            
            
            $result = mysqli_query( $this->connection, $querry);
            if( !$result ){
                return $result;
                
            }
            return true;
        }
        
        function deleteTableData( $tableName, $condition ){
            $querry = "DELETE FROM ".$tableName." WHERE ".$condition;
            
            $result = mysqli_query( $this->connection, $querry);
            if( !$result ){
                return $result;
                
            }
            return true;
        }
    }
?>