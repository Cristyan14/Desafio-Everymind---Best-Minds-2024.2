<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id_prod'];
        $codigo = $_POST['codigo_prod'];
        $nome = $_POST['nome_prod'];
        $descri = $_POST['descri_prod'];
        $preco = $_POST['preco_prod'];

        
        $sqlUpdate = "UPDATE produto SET codigo_prod='$codigo',nome_prod='$nome',descri_prod='$descri',preco_prod='$preco' WHERE id_prod=$id";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: dashboard.php');

?>