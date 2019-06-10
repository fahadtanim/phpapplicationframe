<?php
    class TaskController{
        
        function __construct(){
            //echo "constructor called";
        }

        function index(){
            echo "index called";
        }
        function edit( $id = '', $num = '' ){
            

            echo "from all parameter 1: ".$id." parameter 2: ". $num;
        }
        function put_edit( $id = '', $num = '' ){
            echo "from put parameter 1: ".$id." parameter 2: ". $num;
        }
        function get_edit( $id = '', $num = '' ){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password,$db_name);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $result = $conn->query("SHOW TABLES"); // run the query and assign the result to $result
            while($table = mysqli_fetch_array($result,MYSQLI_NUM)) { // go through each row that was returned in $result
                echo($table[0] . "<BR>");    // print the table that was returned on that row.
                // var_dump ($conn->query("DESCRIBE ".$table[0]));
                $r = $conn->query("DESCRIBE ".$table[0]);
                while($col = mysqli_fetch_array($r,MYSQLI_ASSOC)) { 
                    foreach ($col as $key => $value) {
                        echo $col[$key]."<BR>";
                       }
                }
            } 
            // var_dump($result);
            echo "<br>Connected successfully";
            echo "<br>from get parameter 1: ".$id." parameter 2: ". $num;
        }
    }
?>