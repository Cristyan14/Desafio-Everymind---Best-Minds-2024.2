<?php
include_once('config.php');

if(isset($_POST['submit'])){
 
      $codigo = $_POST['codigo_prod'];
      $nome = $_POST['nome_prod'];
      $descri = $_POST['descri_prod'];
      $preco = $_POST['preco_prod'];

      $comando = "INSERT INTO produto(codigo_prod,nome_prod,descri_prod,preco_prod) VALUES('$codigo', '$nome', '$descri', '$preco')";
      $result = $conexao->query($comando);
      header('Location: dashboard.php');
} else {
    echo "Erro: Produto não cadastrado.";
    exit;
}
?>