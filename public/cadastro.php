<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>L.A.Rosa imóveis - Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <i class="bi bi-house-door-fill"></i>
        L.A Rosa
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>              
    </head>
    <body>                
<br>

<div class="card text-center" style="width: 120rem;">
  <div class="card-header">
    <h5 class="card-title">Ficha de Captação</h5>
  </div>
      <ul class="list-group list-group-flush"> 
<form><br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Tipo do Imóvel</legend>
    <div class="col-sm-10">

<<<<<<< HEAD
      <!-- Criação do Radio para seleção de imóvel "Casa" (ln= 51-56) -->
      <div class="form-check form-check-inline">
=======
        <form method="POST" action="cadastrar_action"><br>  
            <input class="form-control" type="text" placeholder="Referencial" aria-label="default input example"><br>

            <!-- Criação do Radio para seleção de imóvel "Casa" (ln= 51-56) -->
            <div class="form-check form-check-inline">
>>>>>>> 59692bdd368ca40bd915b663625f37b226132cad
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Casa
                </label>
            </div>
            <!-- Criação do Radio para seleção de imóvel "Apartamento" (ln= 58-63) -->            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Apto
                </label>
            </div>
            <!-- Criação do Radio para seleção de imóvel "Terreno" (ln= 65-70) -->
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Terreno
                </label>
            </div>
            <!-- Criação do Radio para seleção de imóvel "Comercial" (ln= 72-77) -->
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Comercial
                </label>
            </div>
            <!-- Criação do Radio para seleção de imóvel "Kitnet" (ln= 79-84) -->
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Kitnet
                </label>
            </div>
            <!-- Criação do Radio para seleção de imóvel "Outro" com campo para digitação do tipo de imóvel (ln= 86-92) -->
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  OUTRO
                </label>
                <input class="mb-3" type="text" placeholder="Outro" aria-label="default input example">
            </div><br><br>
   
            </div>
  </fieldset>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
    </ul>      
    </body>
</html>