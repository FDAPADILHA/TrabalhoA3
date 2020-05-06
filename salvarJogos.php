<?php
    $company = $_POST['company'];
    $platform = $_POST['platform'];
    $name = $_POST['name'];

    include "clsConexao.php";

    if(isset( $_REQUEST['salvar'])){
        $query = "INSERT INTO jogos (plataforma,empresa,nome) VALUES ('$platform','$company','$name')";
        Conexao::executar($query);
        header("Location: jogos.php");
    }
?>