<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

// Receber os dados do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];




// Conectar ao BD
include ("conexao.php");
//cadastra no banco
$sql = "INSERT INTO usuario(nome,matricula,senha) 
    VALUES ('$nome',$matricula,'$senha')";

if (mysqli_query($conexao, $sql)) {
  echo "<script>
  Swal.fire({
      icon: 'success',
      title: 'Sucesso! Usuário Cadastrado',
      text: 'Pessoa cadastrada com sucesso.',
      showConfirmButton: false,
      timer: 1500
  }).then(() => {
      window.location.href = '../index.php';
  });
  </script>";
} else {
  echo "<script>
  Swal.fire({
      icon: 'error',
      title: 'Erro ao cadastrar',
      text: 'Falha ao cadastrar.',
      showConfirmButton: false,
      timer: 1500
  }).then(() => {
      window.location.href = '../index.php';
  });
  </script>";
}
