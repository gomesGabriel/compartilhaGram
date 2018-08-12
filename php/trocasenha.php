<html>
    <head>
        <title>Troca Senha</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/css.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="img/png" href="../img/icon.jpg"> 
    </head>
    <body>
        <div class="conteiner">
            <form method="post" action="trocasenha.php">
                <h3 id="top">Preencha os dados para trocar a senha</h3>
                 <table border = "0">
                     <tr>
                         <td>
                             <label>LOGIN:</label>
                             <input type="text" name="nick">
                         </td>
                    </tr>
                     <tr>
                         <td>
                             <label>SENHA ANTIGA:</label>
                             <input type="password" name="senhaAntiga">
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <label>SENHA NOVA:</label>
                             <input type="password" name="senhaNova">
                         </td>
                     </tr>
                </table>
                <br/>
                <input type="submit" name="submit" value="Alterar"/>
                <?php
                    if((!empty($_POST['senhaAntiga'])) and (!empty($_POST['senhaNova'])) and (!empty($_POST['nick']))){
                        require('conectar.php');

                        $nick = addslashes(trim($_POST["nick"]));
                        $senhaAntiga = crypt(trim($_POST["senhaAntiga"]),"xx");
                        $senhaNova = crypt(trim($_POST["senhaNova"]),"xx");
                        $sql = "SELECT * FROM usuarios WHERE usuario = '$nick' AND senha = '$senhaAntiga'";
                        $res = mysqli_query($conexao,$sql);
                        $total = mysqli_num_rows($res);

                        if($total>0){
                            $sql2 = "UPDATE `usuarios` SET `senha` = '$senhaNova' WHERE usuario = '$nick' AND senha = '$senhaAntiga'";
                            if (mysqli_query($conexao,$sql2)){
                                echo"Senha alterada com sucesso!";
                                echo"<a href='../index.html'> Voltar a Tela inicial </a>";
                            }else{
                                echo"Ocorreu algum erro ao alterar senha! ";
                                echo"<a href='../index.html'> Voltar a Tela inicial </a>";
                            }
                        }else{
                            echo"Falha na alteração da senha! <br/> Login ou senha Incorretos!";
                            echo"<a href='../index.html'> Voltar a Tela inicial </a>";
                        }
                    }else{
                        echo"Você deve preencher todos os campos para poder alterar a senha!";
                        echo"<a href='../index.html'> Voltar a Tela inicial </a>";
                    }
                ?>
            </form>
            
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