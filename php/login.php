<?PHP
    session_start();
    if($_POST){
        if(empty($_POST["nick"]) || empty($_POST["senha"])){
            echo "<br/> Você deve preencher todos os campos!";
            echo "<br/> <a href=login.html> Voltar ao Início </a>";
            exit;
        }
        include("conectar.php");
        $nick = addslashes(trim($_POST["nick"]));
        $senha = crypt(trim($_POST["senha"]),"xx");
        $sql = "SELECT * FROM usuarios WHERE usuario='$nick' AND senha='$senha'";
        $res = mysqli_query($conexao,$sql);
        $total = mysqli_affected_rows($conexao);//pega o numero de linhas do bd         
        if($total) {
            $dados = mysqli_fetch_array($res);
            if(!strcmp($senha, $dados["senha"])) {
                $_SESSION["coduser"]= $dados["coduser"];
                $_SESSION["usuario"] = stripslashes($dados["usuario"]);
                header("Location: pagPrincipal.php");
                exit;
            }else {
                echo "Senha inválida!";
                echo "<br><a href=login.html>Voltar para tela de login</a>";
                exit;
            }
        }else {
            echo "O login fornecido é inexistente!";
            echo "<br><a href=login.html>Voltar para tela de login</a>";
            exit;
        }
        mysql_close(); 
    }
?>