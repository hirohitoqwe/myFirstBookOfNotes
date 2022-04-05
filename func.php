<?php 
function savemessage(){
	$db=mysqli_connect('localhost','root','','zm') or die('miss connect');
	mysqli_set_charset($db,'utf8');

	if (!empty($_POST['name'] and $_POST['textarea'])){
		$nme=$_POST['name'];
		$txt=$_POST['textarea'];
		$str=mysqli_query($db,"INSERT INTO zm (name,text) VALUES('$nme','$txt')");
		if (!$str){
			echo mysqli_connect_error();
		}
		else{
			echo 'correct';
		}
	}
}

?>