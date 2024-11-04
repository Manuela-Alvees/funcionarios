<?php

if ($_SERVER ["REQUEST_METHOD"]== "POST") {
    $cpf = $_POST ['cpf'];
    $senha = $_POST ['senha'];


include "conexao.php";

$sql = "SELECT * FROM funcionarios 
WHERE `cpf` = '$cpf'
AND `senha` = '$senha'";

$resultado =  mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0 ){
    echo "liberado!";
    header('location: boas.html');
}else {
    echo "usuario ou senha invalidos!";
    echo "<a href = 'index.html'>Voltar</a>";
}

}