<?php
session_start();
$cod = $_SESSION["coduser"];
$nameUser = $_SESSION["usuario"];
if(!isset($_SESSION["coduser"]) || !isset($_SESSION["usuario"])) {
	header("Location: ../index.html");
	exit; 
	}
///Chamar isso em todas as págs, desse tipo: require("verifica.php");   require("conexao.php");
?>