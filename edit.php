<?php
include_once('config.php');

$id_prod = null; // Definir a variável inicialmente

if (!empty($_GET['id_prod'])) {
    $id_prod = intval($_GET['id_prod']); // Sanitizar o ID para evitar SQL Injection

    // Preparar e executar a consulta
    $sqlSelect = "SELECT * FROM produto WHERE id_prod=?";
    $stmt = $conexao->prepare($sqlSelect);
    $stmt->bind_param("i", $id_prod);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $codigo = $user_data['codigo_prod'];
        $nome = $user_data['nome_prod'];
        $descri = $user_data['descri_prod'];
        $preco = $user_data['preco_prod'];
    } else {
        echo "Erro: Produto não encontrado.";
        exit;
    }
} else {
    echo "Erro: ID do produto não especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="author" content="Cristyan Lisboa">
    <meta name="description" content="Desafio EveryMind">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto - Nunes Sports</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>
    <a href="dashboard.php">Voltar</a>
    <div class="box">
        <form action="editSave.php" method="POST" class="formulario">
            <fieldset>
                <br>Edição de Produtos</br>
                <br>
                <div class="inputBox">
                    <label for="codigo_prod" class="labelInput">Código Produto: </label>
                    <input type="text" name="codigo_prod" id="codigo_prod" class="inputUser" value="<?php echo htmlspecialchars($codigo); ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="nome_prod" class="labelInput">Nome Produto: </label>
                    <input type="text" name="nome_prod" id="nome_prod" class="inputUser" value="<?php echo htmlspecialchars($nome); ?>" required>
                </div>
                <br><br>
                <div class="inputBox area">
                    <label for="descri_prod" class="labelInput">Descrição Produto: </label>
                    <textarea name="descri_prod" id="descri_prod" class="inputUser" rows="4" cols="50" required><?php echo htmlspecialchars($descri); ?></textarea>                </div>
                <br><br>
                <div class="inputBox">
                    <label for="preco_prod" class="labelInput">Preço Produto: </label>
                    <input type="text" name="preco_prod" id="preco_prod" class="inputUser" value="<?php echo htmlspecialchars($preco); ?>" required>
                </div>        
                <br><br>
                <input type="hidden" name="id_prod" value="<?php echo htmlspecialchars($id_prod); ?>">
                <input type="submit" name="update" id="submit" value="Atualizar" class="botao">
            </fieldset>
        </form>
    </div>
</body>
</html>
