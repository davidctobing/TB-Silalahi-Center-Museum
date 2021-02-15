<?php
	
	session_start();

	require_once('function.php');

	$id = $_GET["id"];

	if(deleteTicket($id) > 0){
		header('Location: ticket.php?pesan=sukses');
	}
	else{
		header('Location: ticket.php?pesan=gagal');
	}
?>