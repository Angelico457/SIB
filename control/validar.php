<?php
include('conexion.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$Codigo = $_POST['txtcod'];
$Clave = $_POST['txtclav'];
$Proyecto = $_POST['txtproy'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($Codigo) | empty($Clave)  | empty($Proyecto))
	{
	header("Location: ../index.html");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = mysql_query("SELECT * from Login where codigo = '$Codigo' and clave = '$Clave' and proyecto = '$Proyecto' ");
if ($row = mysql_fetch_array($sql))
		{
		session_start();
		//$_SESSION['codigo'] = $usuario;
		$_SESSION['proyecto'] = $Proyecto;
		header("Location: ../perfil.php");
		}else
			{
			header("Location: ../index.html");
			exit();
		}
}
?>
