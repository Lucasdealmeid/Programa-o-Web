<?php

if(isset($_POST['cadastrar']) ){

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $inserir = mysqli_query($conexao, "INSERT INTO usuarios (nome,senha) VALUES ('$nome', '$senha')");
}



?>