<?php

    include_once('config.php');
    if(!empty($_GET['id_prod']))
    {

        $id_prod = $_GET['id_prod'];

        $sqlSelect = "SELECT * FROM produto WHERE id_prod=$id_prod";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produto WHERE id_prod=$id_prod";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: dashboard.php');
   
?>