<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, '$nome', '$email', '$senha')";

$query = $conexao ->query($insert);

if ($conexao ->query($insert)) {
    echo "<script>alert('Corretor Cadastrado com Sucesso!');
    location.href = '../tela_login.html'</script>";
}else{
    echo "<script>alert('Corretor não cadastrado!!'); history.back() </script>";

}

?>