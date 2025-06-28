<?php

// CAPTURA DO VALOR NA URL DO SITE //
$id = $_GET ['codigo'];

// INCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';


// INSTRUÇÃO DO SQL PARA CAPTURAR USUARIO DIGITADO NA TELA DE LOGIN
$select = "SELECT * FROM tb_imóvel WHERE cd_imovel = '$id'";


// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO
$query = $conexao->query($select);


// ARMAZENA A 1ª LINHA DO BANCO DENTRO DA VARIÁVEL RESULTADO 
$resultado = $query->fetch_assoc();



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóveis</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
    <div class="container">
        <aside>
            <img src="" alt=""> 
        </aside>
        <form action="#" method="post">
            <label for="tipoimovel">Tipo de Imóvel</label>
            <input type="text" name="tipoimovel" value="<?php echo $resultado['tipo_imovel'];?>" id="tipoimovel">

            <label for="nmendereco">Endereço</label>
            <input type="text" name="endereco" value="<?php echo $resultado['nm_endereco'];?>" id="endereco">

            <label for="nrendereco">Nº Endereço</label>
            <input type="text" name="nrendereco" value="<?php echo $resultado['nr_endereco'];?>" id="nrendereco">

            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" value="<?php echo $resultado['nm_complemento'];?>" id="complemento">

            <label for="airro">Bairro</label>
            <input type="text" name="bairro" value="<?php echo $resultado['nm_bairro'];?>" id="bairro">

            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" value="<?php echo $resultado['nm_cidade'];?>" id="cidade">

            <label for="estado">Estado</label>
            <input type="text" name="estado" value="<?php echo $resultado['nm_cidade'];?>" id="estado">

            <label for="cep">CEP</label>
            <input type="text" name="cep" value="<?php echo $resultado['cep_imovel'];?>" id="cep">

            <label for="venda">Venda</label>
            <input type="text" name="venda" value="<?php echo $resultado['valor_venda'];?>" id="venda">

            <label for="aluguel">Aluguel</label>
            <input type="text" name="aluguel" value="<?php echo $resultado['valor_aluguel'];?>" id="aluguel">

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="<?php echo $resultado['descricao_imovel'];?>" id="descricao">

            <label for="status">Status</label>
            <input type="text" name="status" value="<?php echo $resultado['status_imovel'];?>" id="status">


            <div class="botao">
                <button type="submit">Editar</button>
                <a href="listar_imoveis.php">Voltar</a>
            </div>
        </form>
    </div>

</body>
</html>