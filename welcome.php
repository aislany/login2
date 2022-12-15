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
    <title>Bem vindo</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
</head>
<body class="bg-secondary p-2 text-dark bg-opacity-25">


    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
    <br>

<div class="container-fluid bg-secondary"><br>
<div class="row d-flex justify-content-center">
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="cadastrar_produtos.php" role="button">Cadastrar Veículos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="consultar_produtos.php" role="button">Consultar Veículos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="listar_produtos.php" role="button">Listar Veículos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="excluir_produtos.php" role="button">Excluir Veículos</a>
</div></div>
<br><br><br>

<div class="container-fluid bg-secondary">
<div class="row d-flex justify-content-center">
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="cadastrar_vendedor.php" role="button">Cadastrar Vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="consultar_vendedor.php" role="button">Consultar Vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="listar_vendedor.php" role="button">Listar Vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="excluir_vendedor.php" role="button">Excluir Vendedor</a>


</div>

</div>
<br>
</div>

</div>
<br>

<div class="container-fluid bg-dark">
    <br><br>
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Fiat Strada MPI HARD WORKING CE</h1>
        <p><h3>R$ 58.999</h3></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="foto2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Jeep Compass LIMITED</h1>
        <p><h3>R$ 106.999</h3></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="foto3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>JEEP RENEGADE TURBO LONGITUDE</h1>
        <p><h3>R$ 107.999</h3></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="foto4.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Hyundai HB20 COMFORT PLUS</h1>
        <p><h3>R$ 51.099</h3></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <br><br>
</div>
</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>