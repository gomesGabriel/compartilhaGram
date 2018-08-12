<?php
    require("verifica.php"); 
    require("conectar.php");
?>
<html>
    <head>
        <title>Enviar mensagem</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/css.css">   
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
        
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="pagPrincipal.php">Página principal</a></li>
                <li><a href="mensagensRecebidas.php">Mensagens recebidas</a></li>
                <li><a href="submeteFotos.php">Inserir Nova Foto</a></li>
                <li><a href="#contato">Contato</a></li>
                <li id="perfil"><a href="perfil.php"><?php echo $nameUser;?></a></li>
            </ul>
        </nav>
        <div class="conteiner">
            <!--<script src="js/funcao1.js"></script>-->
            <form method="post" id="formulario" action="">
                <label>Selecione o usuário para enviar mensagem:</label>
                <?php
                    $sql = "SELECT * FROM usuarios";
                    $res = mysqli_query($conexao,$sql);
                    //$row = mysqli_fetch_array($res);
                ?>
                <select name='codUserNa'>
                <?php
                  foreach ($res as $row) {//while($row = mysqli_fetch_array($res))
                        //if($row['usuario']==$nameUser){
							
						//}else{
                          echo "<option value =".$row['coduser'].">".$row['usuario']."</option> </br>";
						  //}
                    }
                ?>
                </select>
                <br/>
                <label>Digite sua mensagem:</label><br/>
                <textarea name="msg"  style="height: 206px; width: 701px;overflow-y: scroll;font-size:14px;font-family:calibri;background-color:lightgrey"></textarea><br/>
                
                <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                if($_POST){
                     if (!empty($_POST['codUserNa']) or !empty($_POST['msg'])){
                         $codUserDest = $_POST['codUserNa'];
                         $msg = $_POST['msg'];
                         $hora = date("Y/m/j H:i:s");
                         
                         $sql = "INSERT INTO mensagens (mensagem, hora, remetente, destinatario) VALUES ('$msg','$hora',$cod,$codUserDest)";

                         $res1 = mysqli_query($conexao,$sql);
                         if ($res1){
                             echo "<br>Inserido";
                             mysqli_close($conexao);
                         }else{ 
                             echo "<br>Erro";
                             var_dump($res1);
                             mysqli_close($conexao);
                         }
                     }else{
                         echo "Campos em branco!";
                     } 
                    }
                ?>
            <section id="contato">
                <h3>CONTATO</h3>
                <p>Entre em contato conosco para sugestões de melhora ou de dúvidas.</p>
                <div>
                    <img src="../img/fone.png" width="50" height="50" alt="fone">
                    <p><a href="tel:xx55555555">(31) 3256 3000 Gabriel</a></p>
                </div>
                <div>
                    <img src="../img/fone.png" width="50" height="50" alt="fone">
                    <p><a href="tel:xx55555555">(31) 3256 3000 Thiago</a></p>
                </div>
                <div>
                    <img src="../img/fone.png" width="50" height="50" alt="fone">
                    <p><a href="tel:xx55555555">(31) 3256 3000 Sonia</a></p>
                </div>
                <div>
                    <img src="../img/contato.png" width="50" height="50" alt="email">
                    <p><a href="mailto:gabrielgomesssilva14@gmail.com" onclick="clickMouse()">gabrielgomesssilva14@gmail.com</a></p>
                </div>
                <div>
                    <img src="../img/contato.png" width="50" height="50" alt="email">
                    <p><a href="mailto:thiago.r.fraga@hotmail.com" onclick="clickMouse()">thiago.r.fraga@hotmail.com</a></p>
                </div>
                <div>
                    <img src="../img/contato.png" width="50" height="50" alt="email">
                    <p><a href="mailto:sonia@gmail.com" onclick="clickMouse()">sonia@gmail.com</a></p>
                </div>
            </section>
			<footer>
				<p>Desenvolvido por Gabriel Gomes, Thiago fraga e Sonia Harumi.</p>
				<a href="#top" id="ref">Início</a>
			</footer>		
		</div>
    </body>
</html>