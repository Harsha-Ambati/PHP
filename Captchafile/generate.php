<?php

	session_start();
	
	
	$text = $_SESSION['secure'];
	$t_size = 30;
	
	$im_width = 110;
	$im_height = 40;
	
	$image = imagecreate($im_width, $im_height);
	$bg = imagecolorallocate($image, 255, 255, 255,);
	$t_color = imagecolorallocate($image, 0, 0, 0);
	
	for($x=1; $x<=30; $x++){
		$x1 = rand(1, 100);
		$y1 = rand(1, 100);
		$x2 = rand(1, 100);
		$y2 = rand(1, 100);
		
		imageline($image, $x1,$y1,$x2,$y2, $t_color);
		
		
	}
	
	imagettftext($image, $t_size, 0, 15, 30, $t_color, 'C:\xampp\htdocs\gd\Pacifico.ttf', $text);
	imagejpeg($image);
	imagedestroy($image);
	
	


?>
