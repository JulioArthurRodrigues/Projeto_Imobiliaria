<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$creci = $_POST['creci'];


include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, '$nome', '$telefone', '$email', '$creci')";

$query = $conexao ->query($insert);

if ($conexao ->query($insert)) {
    echo "<script>alert('Corretor Cadastrado com Sucesso!');
    location.href = '../cadastro.html'</script>";
}else{
    echo "<script>alert('Corretor não cadastrado!!'); history.back() </script>";

}

?>