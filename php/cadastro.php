<html>
    <head>
        <title> Cadastro de usuário	</title>
        <link rel="stylesheet" href="../css/css.css">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
        <meta charset="utf-8">
    </head>
    <body style="background-repeat: no-repeat">
        <div class="conteiner">
            <font size="6" face="calibri light"><br/><br/>
                <center>
                    <font color="BLACK"> 
                        <h3>CADASTRO DE USUÁRIOS</h3>
                    </font>
                    <form name="cadastro" action="cadastro.php" method="post">
                        <br/>
                        <font align="rigth">
                            NOME*:<input name="nome" type="text" size="30" required placeholder="Ex.:Thiago"/>
                            NICK*:<input name="nick" type="text" size="15" required placeholder="Ex.:Mascote"/>
                            SENHA*:<input name="senha" type="password" size="15" required placeholder="Ex.:123456"/><br/>
                            <input name="botao" value="Enviar" type="submit" />
                        </font>
                    </form>
                    <?php
                        require('conectar.php');
                        if(empty($_POST["nome"]) or (empty($_POST["nick"])) or (empty($_POST["senha"]))){
                            echo"<br/> Você deve preencher todos os campos com *";
                            echo"<br/><a href='../index.html'> Voltar a Tela inicial</a>";
                            exit;
                        }
                        $nome = strtoupper(addslashes(trim($_POST["nome"])));
                        $login = addslashes(trim($_POST["nick"]));
                        $senha = crypt(trim($_POST["senha"]),"xx");
                        $sql = "SELECT * FROM usuarios WHERE usuario = '$login'";
                        $res = mysqli_query($conexao,$sql);
                        $total = mysqli_affected_rows($conexao);

                        if($total>0){
                            echo"<h3> Login já existente, tente uma usuário diferente</h3>";
                            echo "<a href='../index.html'> Voltar a Tela inicial </a><br";
                        }else{
                            $sql1 = "INSERT INTO `usuarios`(`coduser`, `usuario`, `senha`, `nome`) VALUES(NULL,'$login','$senha','$nome')";
                            $res1 = mysqli_query($conexao,$sql1);

                            if($res1){
                                echo "<h3>Cadastro Realizado </h3>";
                                echo "<a href='../index.html'> Voltar a Tela inicial </a><br";
                                if(!file_exists('../fotos/'.$login)){
                                    mkdir('../fotos/'.$login,0777);
                                    echo "Seu diretório de fotos foi criado";   
                                }else{
                                    echo "Diretório de fotos existente";
                                }
                                
                            }else{
                                echo "Erro no insert";
                            }
                        }
                        mysqli_close($conexao);
                    ?>
                </center>
            </font>
        </div>
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
    </body>
</html>