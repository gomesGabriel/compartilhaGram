<?php
function busca(){
    require("conectar.php");
    $sql = "SELECT * FROM usuarios";
    $res = mysqli_query($conexao,$sql);
    $row = mysqli_fetch_array($res);
    echo ("<form action='mensagens.php' type='post'><select name='codUserNa'>");
    foreach ($res as $row) {
        echo "<option value =".$row["coduser"].">".$row["usuario"]."</option> </br>";
        $coduser1 = $row["coduser"];
    }
    echo "</select></form>";
    mysqli_close($conexao);
}
?>  