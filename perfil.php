<?php
session_start();
if (isset($_SESSION['proyecto'])) {
	echo "";
}else{
	header("Location: index.html");
	exit();
}
//echo "Datos del proyecto ".$_SESSION['proyecto']."<br>";
echo "<a href='control/cerrar.php'>SALIR</a>";
?>
