<?php 
include ("conexion.php");



$con= mysql_connect($host,$user,$pw) 
or die ("problemas al conectar"); 

mysql_select_db($db,$con) 
or die ("problemas al conectar la bd");

mysql_query("INSERT INTO usuarios (Usuario_Nombre,Usuario_Username,Usuario_Password,Usuario_Email)
VALUES ('$_POST[Nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')", $con);
echo "datos insertados<br>";
echo "Nombre".$_POST['Usuario_Nombre']."<br>";
echo "Usuario".$_POST['Usuario_Username']."<br>";
echo "Password".$_POST['Usuario_Password']."<br>";
echo "E-mail".$_POST['Usuario_Email']."<br>";




?>