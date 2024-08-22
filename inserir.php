<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristyan Lisboa">
    <meta name="description" content="Desafio EveryMind">
    <title>Inserir Produto - Nunes Sports</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>
    <a href="dashboard.php">Voltar</a>
    <div class="box">
        <form action="inserirSave.php" method="POST" class="formulario">
            <fieldset>
                <legend><br>Cadastro de Produtos</br></legend>
                <br>
                <div class="inputBox">
                    <label for="codigo_prod" class="labelInput">Código Produto: </label>
                    <input type="text" name="codigo_prod" id="codigo_prod" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="nome_prod" class="labelInput">Nome Produto: </label>
                    <input type="text" name="nome_prod" id="nome_prod" class="inputUser"  required>
                </div>
                <br><br>
                <div class="inputBox area">
                    <label for="descri_prod" class="labelInput">Descrição Produto: </label>
                    <textarea name="descri_prod" id="descri_prod" class="inputUser" rows="4" cols="50" required></textarea>               
                 </div>
                <br><br>
                <div class="inputBox">
                    <label for="preco_prod" class="labelInput">Preço Produto: </label>
                    <input type="text" name="preco_prod" id="preco_prod" class="inputUser"  required>
                </div>        
                <br><br>
                <input type="hidden" name="id_prod" >
                <input type="submit" name="submit" id="submit" value="Cadastrar" class="botao">
            </fieldset>
        </form>
    </div>
</body>
</html>
