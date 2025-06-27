<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
    <!--Link do Font Awesome-->
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

    <title>Imóveis Cadastrados</title>

</head>
<body>
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">JD Imóveis</a>
        </div>
    </nav>

    <div class="container">
        <h1>Imóveis</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TIPO IMÓVEL</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">Nº ENDEREÇO</th>
            <th scope="col">COMPLEMENTO</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CEP</th>
            <th scope="col">VENDA</th>
            <th scope="col">ALUGUEL</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">STATUS</th>
            </tr>
        </thead>
        <tbody>
                <!-- PHP -->
                <?php
                
                    // INCLUINDO O ARQUIVO DE CONEXÃO // 
                    include 'conexao.php';

                    // INSTRUÇÃO DO SQL PARA CAPTURAR TODOS OS DADOS DO BANCO //
                    $select = "SELECT * FROM tb_imóvel";

                    // FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO //
                    $query = $conexao->query($select);

                    // ARMAZENA A 1ª LINHA DO BD DENTRO DA VARIÁVEL RESULTADO //
                    while ($resultado = $query->fetch_assoc()) {

                        ?>
                    
                        <tr>
                          <th scope="row"> <?php echo $resultado ['cd_imovel']?></th>
                                      <td> <?php echo $resultado ['tipo_imovel']?></td>
                                      <td> <?php echo $resultado ['nm_endereco']?></td>
                                      <td> <?php echo $resultado ['nr_endereco']?></td>
                                      <td> <?php echo $resultado ['nm_complemento']?></td>
                                      <td> <?php echo $resultado ['nm_bairro']?></td>
                                      <td> <?php echo $resultado ['nm_cidade']?></td>
                                      <td> <?php echo $resultado ['nm_estado']?></td>
                                      <td> <?php echo $resultado ['cep_imovel']?></td>
                                      <td> <?php echo $resultado ['valor_venda']?></td>
                                      <td> <?php echo $resultado ['valor_aluguel']?></td>
                                      <td> <?php echo $resultado ['descricao_imovel']?></td>
                                      <td> <?php echo $resultado ['status_imovel']?></td>
                                      <td> <a href="delete_imovel.php?codigo=<?php echo $resultado ['cd_imovel']?>"><i class="fa-solid fa-trash-can"></i></td>
                                      <td> <a href="update_imovel.php?codigo=<?php echo $resultado ['cd_imovel']?>"><i class="fa-solid fa-user-pen"></i></td>
                    
                        </tr>
                    
                        <?php  };    ?>


            </tbody>
        </table>
    </div>
</body>
</html>