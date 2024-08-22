<?php
session_start();
include_once('config.php');

$sql = "";
$stmt = null;

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM produto WHERE id_prod LIKE ? OR codigo_prod LIKE ? OR nome_prod LIKE ? OR descri_prod LIKE ? OR preco_prod LIKE ? ORDER BY id_prod DESC";
    $stmt = $conexao->prepare($sql);
    $param = '%' . $data . '%';
    $stmt->bind_param('sssss', $param, $param, $param, $param, $param);
} else {
    $sql = "SELECT * FROM produto ORDER BY id_prod ASC";
    $stmt = $conexao->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {

    echo "Erro na consulta SQL: " . $conexao->error;
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="author" content="Cristyan Lisboa">
    <meta name="description" content="Desafio EveryMind">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nunes Sports - Dashboard</title>
</head>
<body>
    <nav class="navbar ">
            <div class="container-fluid" style="display:flex; flex-direction:column;">
                <h1 >Nunes Sports</h1>
                <h2 >Gerenciador de Produtos</h2>
            </div>
      
    </nav>
    <div class="box-search" style="width:100%; display:flex;justify-content:center; align-itens:center;">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary" style="margin-left:10px;";>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>

    <section class="dash">
        <table class="table text-white table-bg">
            <thead style="color:black;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Código Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Descrição Produto</th>
                    <th scope="col">Preço Produto</th>
                    <th> <a class='btn btn-sm btn-primary' href='inserir.php' title='Inserir'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'>
                            <path d='M8 1a1 1 0 0 1 1 1v6h6a1 1 0 0 1 0 2H9v6a1 1 0 0 1-2 0V10H1a1 1 0 0 1 0-2h6V2a1 1 0 0 1 1-1z'/>
                        </svg>
                        </a></th>
                </tr>
            </thead>
            <tbody style="color:black;">
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id_prod']."</td>";
                        echo "<td>".$user_data['codigo_prod']."</td>";
                        echo "<td>".$user_data['nome_prod']."</td>";
                        echo "<td>".$user_data['descri_prod']."</td>";
                        echo "<td>".$user_data['preco_prod']."</td>";
                     
                        echo "<td>
                           
    
                        
                        <a class='btn btn-sm btn-primary' href='edit.php?id_prod=$user_data[id_prod]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id_prod=$user_data[id_prod]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </section>



<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'dashboard.php?search='+search.value;
    }
</script>


    
        
</body>
</html>