<?php
require 'dbconnect.php';

if(isset($_GET['s_text'])){
	$s_text = $_GET['s_text'];
	 $s_text = mysqli_real_escape_string($mycon, $s_text);
		if(!empty($s_text)){
	$query = "SELECT `name` FROM `food` WHERE `name` LIKE '$s_text%' ";
	if($query_run = mysqli_query($mycon, $query)){
		$num_rows = mysqli_num_rows($query_run);
		if($num_rows >= 1){
			while($row = mysqli_fetch_assoc($query_run)){
				echo $row['name'].'<br><br>';
				
			}
			
			
		}
		
	 }
  }
	
}
	
	
	

?>
