<?php
	function DBConnect( $serverName = "localhost", $userName = "root", $password = "", $DBName = "pptm", $state = true ){
		static $connection = "";
		if( $state && $connection == "" )
			$connection = mysqli_connect( $serverName, $userName, $password, $DBName );
		if( !$state ){
			mysqli_close( $connection );
			$connection = "";
		}
		return $connection;
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
		
		$con = DBConnect();
		$result = mysqli_query( $con, $querry );
		return $result;
	}
	
	function getTableData( $tableName, $condition=false ){
		
		$querry = "SELECT * FROM ".$tableName;
		if( $condition )
			$querry = $querry . " WHERE ".$condition;
		//print_r($querry);
		$con = DBConnect();
		$result = mysqli_query( $con, $querry);
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
		$con = DBConnect();
		$result = mysqli_query( $con, $querry);
		if( !$result )
			return false;
		$table = array();
		for( $i=0; $obj = mysqli_fetch_object($result); ++$i ){
			$table[$i] = $obj;
		}
		
		return $table;
	}
	
	//SELECT CustomerName, City FROM Customers WHERE CustomerName = 'Alfred Schmidt';
	/*
	function getTableColData( $column, $tableName, $condition = '' ){
		if( $condition == '')
			$querry = "SELECT ".$column." FROM ".$tableName;
		else
			$querry = $querry."FROM ".$tableName." WHERE ".$condition;
		
		$con = DBConnect();
		$result = mysqli_query( $con, $querry);
		if( !$result )
			return false;
		$table = array();
		for( $i=0; $row = mysqli_fetch_assoc($result); ++$i )
			$table[$i] = $row;
		
		return $table;
	}
	*/
	//UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;
	
	function updateTable( $tableName, $table, $condition ){
		$querry = "UPDATE ".$tableName." SET ";
		
		foreach( $table as $key => $value ){
			$querry = $querry.$key." = '".$value."', ";
		}
		$querry{strlen($querry) - 2} = " ";
			$querry = $querry."WHERE ".$condition;
		
		
		$con = DBConnect();
		$result = mysqli_query( $con, $querry);
		if( !$result ){
			return $result;
			
		}
		return true;
	}
	
	function deleteTableData( $tableName, $condition ){
		$querry = "DELETE FROM ".$tableName." WHERE ".$condition;
		$con = DBConnect();
		$result = mysqli_query( $con, $querry);
		if( !$result ){
			return $result;
			
		}
		return true;
	}
	
	
	
?>