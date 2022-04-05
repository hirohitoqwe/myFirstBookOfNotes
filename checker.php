<?php
require_once('func.php');
if (!empty($_POST)){
	savemessage();
	header('Location:index.php');
}
?>