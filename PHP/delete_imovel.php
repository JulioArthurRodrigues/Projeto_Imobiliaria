<?php
    if (isset($_POST['confirmar'])) {
        
         // INCLUINDO O ARQUIVO DE CONEXÃO // 
         include 'conexao.php';

         // CAPTURA DO VALOR NA URL DO SITE //
         $id = $_GET ['codigo'];

         // INSTRUÇÕES PARA DELETAR DENTRO DO SQL //
         $deletar = "DELETE FROM tb_imovel WHERE id_imovel = $id";

        // FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO //
        $query = $conexao->query($deletar);
         

        if ($query ) { 
            echo "<p>". "Imóvel deletado com sucesso!" ."</p>";
            echo "<p>". "Para voltar aos Imóveis cadastrados na JD Imóveis" ."</p>". "<a href = 'listar_imoveis.php'>". "Clique aqui!" ."<a>";
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>

<body>
    <h1>Deseja realmente excluir esse imóvel?</h1>
    <form action="#" method="post">
        <div class="escolha">
            <button type="submit" name="confirmar" value="1">Sim</button>
            <a href="listar_imoveis.php">Não</a>
        </div>
    </form>
</body>
</html>