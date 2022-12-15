<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="estilo.css">
  <title>Buscar Cadastros  de Vendedor </title>
 </head>
 
<body class="bg-secondary p-2 text-dark bg-opacity-25">


<div class="row">
<div class="col">
<br>
<h1 class="my-5">Usuário Logado: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
<div class="col">
<br><br><br><br>
 <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
 </div>
</div>

<div class="container">
<h1>BUSCAR CADASTROS DE VENDEDOR</h1>
<form method="post">
    <div class="mb-3">
        <br>
        <label class="form-label">ID do veículo</label>
        <input type ="number" name= "id" class="form-control" placeholder="Digite o ID do vendedor que queria buscar">
        <input type="submit" name= "botaobuscar" value="Buscar" class="btn btn-primary">
</div>

<?php
if(array_key_exists( 'botaobuscar',$_POST)){
    btbuscar();
}
function btbuscar(){
    $id = $_POST['id'];
    $conexao =mysqli_connect("localhost","root","","base_de_dados");
$sql_pesquisar = "select * from vendedor where id = $id";
$resultado = mysqli_query($conexao,$sql_pesquisar);

echo '<table class="table table-dark table-hover">';
echo '<tr>';
echo '<td>ID</td>';
echo '<td>Nome</td>';
echo '<td>Sobrenome</td>';
echo '<td>Telefone</td>';
echo '<td>Foto</td>';
echo '</tr>';

while($linha = mysqli_fetch_assoc($resultado)){

    echo "<tr>";
    echo "<td>{$linha['id']}<td>";
    echo "<td>{$linha['nome']}<td>";
    echo "<td>{$linha['sobrenome']}<td>";
    echo "<td>{$linha['telefone']}<td>";
    echo "<td><img src='{$linha['foto']}' width='300' height='200'><td>";
    echo"</tr>";
}
echo '</table>';

mysqli_close($conexao);
}




?>