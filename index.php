<?php
if (isset($_COOKIE['id_usuarios'])) {
	header("location:catalogos/index.php");
}
else{
	header("location:login/index.php");
}
?>