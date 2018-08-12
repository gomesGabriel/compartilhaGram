<?php
    require("verifica.php"); 
    require("conectar.php");	
?>
<html>
    <head>
        <title>Seu Feed</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/css.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
	</head>
    <body >
        <nav>
            <ul>
                <li><a href="mensagens.php">Enviar mensagens</a></li>
                <li><a href="mensagensRecebidas.php">Mensagens recebidas</a></li>
                <li><a href="submeteFotos.php">Inserir Nova Foto</a></li>
                <li><a href="#contato">Contato</a></li>
                <li id="perfil"><a href="perfil.php"><?php echo $nameUser;?></a></li>
            </ul>
        </nav>
		<div class="conteiner">
            <center>
                <div id="Fotos">
                    <div>
                        <center>
                            <h2> Seu feed de notícias </h2>
                        </center>
                    </div>
                    <table class="tablefts">
                    <?php
                        $sql = "SELECT * FROM fotos ORDER BY idFotos DESC";
                        $res = mysqli_query($conexao,$sql);
                        while($row = mysqli_fetch_array($res)){
                            $codigopalavra = $row['usuarios_coduser'];
                            $sql2 = "SELECT nome FROM usuarios WHERE coduser = $codigopalavra";
                            $res2 = mysqli_query($conexao,$sql2);
                            while($row2 = mysqli_fetch_array($res2)){
                                $cod = $row2['nome'];
                            }
                            $nomefoto = $row['caminho'];
                            $leg = $row['legenda'];
                            echo '<tr class="fotos"><td class="fotos"><p><font color="black"/>'.$cod.'</p></td></tr>';
                            echo '<tr class="fotos"><td class="fotos">';
                            echo '<img class="fotosInsta"  src="../fotos/'.$nomefoto.'"/>';
                            echo'</td></tr>';
                            echo '<tr><td class="fotos"><p><font color="black"/>Legenda:  '.$leg.'</p></td></tr>';
                        }
                    ?>
                     </table>
                </div>
            </center>	
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