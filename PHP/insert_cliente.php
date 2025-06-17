<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$n = $_POST['nº'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, '$nome', '$cpf', '$cnpj', '$endereco', '$n', '$cep', '$telefone', '$email')";

$query = $conexao ->query($insert);

if ($conexao ->query($insert)) {
    echo "<script>alert('Cliente Cadastrado com Sucesso!');
    location.href = '../cadastro.html'</script>";
}else{
    echo "<script>alert('Cliente não cadastrado!!'); history.back() </script>";

}

?>

 