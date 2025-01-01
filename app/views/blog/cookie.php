<?php
	
	if(!isset($_SESSION['count']))
	{
		$_SESSION['count']=0;
	}
	$_SESSION['count']++;
	//setcookie('cnt',$_SESSION['count'],time()+1000);
	echo "page visited ".$_SESSION['count']."times";
	//echo "<br>page visited cookie  ".$_COOKIE['cnt']."times";
?>