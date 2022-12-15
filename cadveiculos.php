
<?php
$conexao = mysqli_connect("localhost", "root", "", "base_de_dados");

$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$acessorios = $_POST['acessorios'];
$combustivel = $_POST['combustivel '];
$foto = $_POST['foto'];

$sql_inserir = "insert into veiculos(tipo,modelo,ano,marca,cor,acessorios,combustivel,foto) values ('{$tipo}', '{$modelo}' , {$ano} , '{$marca}' , '{$cor}' , '{$acessorios}' , '{$combustivel}' , '{$foto}')";

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);

echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!'); window.location.href='cadastrar_produtos.php'</script>";




?>