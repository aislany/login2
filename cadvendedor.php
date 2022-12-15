<?php

$conexao = mysqli_connect("localhost", "root", "", "base_de_dados");



$nome = $_POST['nome'];

$sobrenome = $_POST['sobrenome'];

$telefone = $_POST['telefone'];

$foto = $_POST['foto'];



$sql_inserir = "insert into vendedor(nome,sobrenome,telefone,foto) values ('{$nome}', '{$sobrenome}', '{$telefone}' , '{$foto}')";



mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);



echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');

      window.location.href='cadastrar_vendedor.php'</script>";







?>