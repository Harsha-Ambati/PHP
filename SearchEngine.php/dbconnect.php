<?php

$host = 'localhost:3307';
$user = 'root';
$pass = '';
$dbname = 'mydatabase';


if($mycon = @mysqli_connect($host, $user, $pass) ){
	
	//echo 'Connected to the sever! ';
		
	if(@mysqli_select_db($mycon, $dbname)){
		
		//echo 'Connected to the DB!';
	}else{
		echo '   DB connection failed!';
	}
	
	
}else{
	echo 'Server Connection is failed!';
	
}


?>
