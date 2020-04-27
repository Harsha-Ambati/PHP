<?php

session_start();

	if(!isset($_POST['code'])){
		
		$_SESSION['secure'] = rand(1000, 9999);
	}else{
			if($_SESSION['secure'] == $_POST['code']){
				$op = '<strong>Correct code</strong>';
			}else{
				$op =  '<b>Incorrect Code!</b>';
		
	}
}
	
?>


<img src="generate.php"/>

<form action="index.php" method="POST">
<br>
Enter the code above:-<br><input type="text" name="code">
<input type="submit" value ="submit">
</form>
<br><br>
<div>
<?php
if(isset($op)){
echo $op;
}
?>
</div>
