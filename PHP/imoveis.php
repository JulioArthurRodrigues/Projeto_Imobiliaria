<?php

$tipoimovel = $_POST['tipoimovel'];
$nomeendereco = $_POST['nomeendereco'];
$numeroendereco = $_POST['numeroendereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$valorvenda = $_POST['valorvenda'];
$valoraluguel = $_POST['valoraluguel'];
$descricaoimovel = $_POST['descricaoimovel'];
$statusimovel = $_POST['statusimovel'];

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, '$nome', '$cpf', '$cnpj', '$endereco', '$n', '$cep', '$telefone', '$email')";

$query = $conexao ->query($insert);

if ($conexao ->query($insert)) {
    echo "<script>alert('Imóvel Cadastrado com Sucesso!');
    location.href = '../cadastro.html'</script>";
}else{
    echo "<script>alert('Imóvel não cadastrado'); history.back() </script>";

}

?>