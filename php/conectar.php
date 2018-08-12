<?php
    // Conecta-se ao banco de dados MySQL
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'compartilhagram';
    $conexao = mysqli_connect($host, $user, $pass, $db);
    // Caso algo tenha dado errado, exibe uma mensagem de erro
   if(mysqli_connect_errno()){
	   echo "Erro na conexão: ".mysqli_connect_error();
  }
//  else{	
//	   echo "Conectado ao banco de dados: $db <br/>";
//   }
?>