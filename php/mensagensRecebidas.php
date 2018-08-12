<?php
    require("verifica.php"); 
    require("conectar.php");
?>
<html>
	<head>
        <title>Mensagens Recebidas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/css.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
        
    </head>
	<body>
        <script src="js/funcao1.js"></script>   
        <nav>
            <ul>
                <li><a href="pagPrincipal.php">Página principal</a></li>
                <li><a href="mensagens.php">Enviar mensagens</a></li>
                <li><a href="submeteFotos.php">Inserir Nova Foto</a></li>
                <li><a href="#contato">Contato</a></li>
                <li id="perfil"><a href="perfil.php"><?php echo $nameUser;?></a></li>
            </ul>
        </nav>
        <div class="conteiner">
            <div id="maior">
                <div>
                    <table>
                        <tr>
                            <th>Recebidas</th>
                            <th>Enviadas</th>
                        </tr>
                    </table>
                </div>
                <div class="linha">
                    <div id="esquerda">
                        <table>
                        <?php
                                $id = 0;
                                $sql = "
                                SELECT *
                                FROM usuarios
                                INNER JOIN mensagens ON usuarios.coduser = mensagens.destinatario WHERE destinatario = $cod ORDER BY hora DESC";

                                $res = mysqli_query($conexao,$sql);
            //                    $id = $row["remetente"];
            //                        $sql1 = "SELECT * FROM `usuarios` WHERE `coduser`=$id";
            //                        $res1 = mysqli_query($conexao,$sql);
            //                        foreach ($res1 as $row1) {
            //                            $remet = $row1["usuario"];
            //                            echo $remet;
            //                            break;
            //                        }
                                echo "<tr>";
                                echo "<th>Remetente</th>";
                                echo "<th>Mensagem</th>";
                                echo "<th>Data</th>";
                                echo "</tr>";
                                foreach ($res as $row){
                                    $id = $row["remetente"];
                                    $sql2 = "SELECT * FROM usuarios WHERE coduser=".$id;
                                    $res1 = mysqli_query($conexao,$sql2);
                                    foreach ($res1 as $row2) {
                                        $remet = $row2['usuario'];                            
                                    }
                                    echo "<tr><td>".$remet."</td><td>".$row["mensagem"]."</td><td>".$row["hora"]."</td></tr>";
                                }
                        ?>
                            </table>
                    </div>
                    <div id="direita">
                        <?php
                                $id = 0;
                                $sql = "
                                SELECT *
                                FROM usuarios
                                INNER JOIN mensagens ON usuarios.coduser = mensagens.destinatario WHERE remetente = $cod ORDER BY hora DESC";
                                $res = mysqli_query($conexao,$sql);
            //                    $id = $row["remetente"];
            //                        $sql1 = "SELECT * FROM `usuarios` WHERE `coduser`=$id";
            //                        $res1 = mysqli_query($conexao,$sql);
            //                        foreach ($res1 as $row1) {
            //                            $remet = $row1["usuario"];
            //                            echo $remet;
            //                            break;
            //                        }
                                echo "<table>";
                                echo "<tr>";
                                echo "<th>Destinatário</th>";
                                echo "<th>Mensagem</th>";
                                echo "<th>Data</th>";
                                echo "</tr>";
                                foreach ($res as $row){
//                                    $id = $row["destinatario"];
//                                    $sql2 = "SELECT * FROM usuarios WHERE coduser=".$id;
//                                    $res1 = mysqli_query($conexao,$sql2);
//                                    foreach ($res1 as $row2) {
//                                        $remet = $row2['usuario'];                         
//                                    }
                                    echo "<tr><td>".$row['usuario']."</td><td>".$row["mensagem"]."</td><td>".$row["hora"]."</td></tr>";
                                }
                            echo "</table>";
                        ?>
                         </div>
                    </div>
            </div>
            <form action="mensagens.php" id="btn" method="post">
                <input type="submit" value="Responder"/>
            </form>
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
