<?php
    require("verifica.php"); 
    require("conectar.php");
	
?>
<html>
	<head>
        <title>Postar foto</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/css.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
    </head>
	<body>
    <nav>
            <ul>
                <li><a href="mensagens.php">Enviar mensagens</a></li>
                <li><a href="mensagensRecebidas.php">Mensagens recebidas</a></li>
                <li><a href="pagPrincipal.php">Página Principal</a></li>
                <li><a href="#contato">Contato</a></li>
                <li id="perfil"><a href="perfil.php"><?php echo $nameUser;?></a></li>
            </ul>
        </nav>
        <div class="conteiner">
            <form action="" method="post" enctype="multipart/form-data">
                <input name="arq" type="file"/><br>
                <label>Insira uma legenda:</label><br>
                <textarea name="msg"  style="height: 206px; width: 701px;overflow-y: scroll;font-size:14px;font-family:calibri;background-color:lightgrey"></textarea><br/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                if($_FILES){
                    $lgd = $_POST['msg'];
                    $ext = strtolower(substr($_FILES['arq']['name'],-4));
                    $tam = $_FILES['arq']['size'];
                    $dir = "../fotos/".$nameUser."/";
                    if((($ext==".jpg")||($ext==".png"))&&($tam <= 3145758)){
                        echo "O arquivo foi aceito!<br/>";
                        if(copy($_FILES['arq']['tmp_name'],$dir.$_FILES['arq']['name'])){
                            $final = $dir.$_FILES['arq']['name'];
                            $nome = $_FILES['arq']['name'];
                            $sql = "INSERT INTO fotos(idFotos, caminho, legenda, nomefoto, Usuarios_coduser) VALUES ('','$final','$lgd','$nome',$cod)";
                            $res = mysqli_query($conexao,$sql);
                            if($res){
                                echo "Cadastro de fotos ok. <br>";
                            }else{
                                echo "Cadastro de fotos NÃO ok. <br>";
                            }
                        }else{
                            echo "Falha ao copiar!<br/>";
                        }
                    }else{
                        echo "O arquivo deve ser um jpg ou png, e deve ser menor que 3MB<br/>";
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
<html>
