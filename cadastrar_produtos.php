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
  <title>Cadastro de Veículos</title>
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
<h1> CADASTRO DE VEÍCULOS</h1>
<form method="post" id="cadastro" action="cadveiculos.php">
<label for="exampleFormControlInput1" class="form-label">Tipo</label>
<select name="tipo" class="form-select" aria-label="Default select example">
  <option selected>Selecione um Tipo de Veículo</option>
  <option value="1">Carro</option>
  <option value="2">Moto</option>
</select>

<div class="mb-3">
  <br>
  <label for="exampleFormControlInput1" class="form-label">Modelo</label>
  <input type="text"name="modelo"class="form-control" id="exampleFormControlInput1" placeholder="Digite o Modelo">
</div>



<div class="row">
<div class="col mb-3">
  <label for="exampleFormControlInput1" class="form-label">Ano</label>
  <input type="number"name="ano" class="form-control" id="exampleFormControlInput1" placeholder="Digite o Ano do Veículo">
</div>
<div class="col mb-3">
  <label for="exampleFormControlInput1" class="form-label">Marca</label>
  <input type="text" name="marca"class="form-control" id="exampleFormControlInput1" placeholder="Digite a Marca">
</div>
<div class="col mb-3">
<label for="exampleFormControlInput1" class="form-label">Cor</label>
<select name="cor"class="form-select" aria-label="Default select example">
  <option selected>Selecione o cor do Veículo</option>
  <option value="Branco">Branco</option>
  <option value="Amarelo">Amarelo</option>
  <option value="Azul">Azul</option>
  <option value="Vermelho">Vermelho</option>
  <option value="Preto">Preto</option>
</select>
</div>
</div>



<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Acessórios</label>
  <textarea name="acessorios"class="form-control" id="acessorio" rows="3"></textarea>
</div>
<label for="exampleFormControlInput1" class="form-label">Combustível</label>
<select name="combustivel"class="form-select" aria-label="Default select example">
  <option selected>Selecione o combustível do Veículo</option>
  <option value="Branco">Gasolina</option>
  <option value="Álcool">Álcool</option>
  <option value="Flex">Flex</option>
  <option value="Diesel">Diesel</option>
</select>
<div class="mb-3">
  <br>
  <label for="exampleFormControlInput1" class="form-label">Foto</label>
  <input type="link" name="foto"class="form-control" id="exampleFormControlInput1" placeholder="Cole o link da Foto do Veículo">
</div>

<button type="submit"  class="btn btn-primary">Cadastrar</button>
</form>
</div>
</body>
</html>