<?php

if (isset($_POST['name']) && !empty($_POST['name']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['message']) && !empty($_POST['message']))
{
	$destino = "frnunz@hotmail.com".',';
	$desde	 = "From:". $_POST['email'];
	$message = "Enviado desde geoimaginarte por: ". $_POST['name']. "\r\n". "\r\n". "Mensaje: ". $_POST ['message'];
	mail ($destino,$message,$desde);
	echo "Correo enviado...";
} else{
	echo "Problemas al enviar";
}
?>