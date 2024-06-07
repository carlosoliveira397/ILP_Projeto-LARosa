<?php
    

    /*
        Chamada ao código no "config.php"
    */

    require_once '../config.php';
    
    $gestor = new PDO(
        "mysql:host=" . MYSQL_HOST . ";" . 
        "dbname=" . MYSQL_DATABASE . "; charset=utf8", 
        MYSQL_USER, 
        MYSQL_PASS
    );

    $dados = $gestor->query("SELECT * FROM tb_imovel");

    $tb_imovel = $dados->fetchALL(PDO::FETCH_ASSOC);
      
?>

<<<<<<< HEAD
<!-- HTML da página principal index -->
=======
>>>>>>> e5a54b5e50b06d82145ea359289ea56ed4d9eb49

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.A.Rosa imóveis</title>
            <!-- Includes Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Danfo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- CSS -->
    <style>
            body {
                background-image: url('https://hotelrouxinol.com.br/wp-content/uploads/2020/03/original-ebd6426cddff7653bef6599802b56e11.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                margin: 0;
                padding: 0;
            }

            .opacity-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(100, 100, 100, 0.6); /* Ajuste para a opacidade desejada */
                z-index: 1;
            }

            .content {
                position: relative;
                z-index: 2;
            }
            table{
                background-color: #FFFFFF !important;
                border: 4px solid #D3BB0C! important;
                text-align: center;
            }
            .navbar {
                background-color: #AA199B !important;
                border-bottom: 2px solid #77338E !important;
            }

            .nav-link {
                color: #FFC100 !important;

            }
            .navbar-brand {
                color: #FFC100 !important;
                font-family: 'Danfo', sans-serif !important;

            }
            .navbar-toggler {
                border-color: #FFC100 !important;
            }

            .navbar-toggler-icon {
                background-image: none;
                color: #FFC100 !important;
            }
        </style>
</head>
<body>
<<<<<<< HEAD
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
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Imóveis</h3>
    <hr>
    <table border='8'>
        <thead>
            <tr>
                <th>Imovel</th>
                <th>Tipo</th>
                <th>Banheiro</th>
                <th>cozinha</th>
                <th>dormitorio</th>
                <th>quintal</th>
                <th>sala</th>
                <th>suite</th>
                <th>valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tb_imovel as $imovel): ?>
            <tr>
                <td>&nbsp; <?= $imovel["cd_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["nm_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_banheiro_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_cozinha_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_dormitorio_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_quintal_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_sala_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["qt_suite_imovel"] ?> &nbsp;</td>
                <td>&nbsp; <?= $imovel["vl_imovel"] ?> &nbsp;</td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total Fornecedores <strong><?= count($tb_imovel) ?></p>
    <hr>
</body>
</html>
=======
<div class="opacity-overlay"></div>
        <div class="content">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">L.A. Rosa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cadastro.php">Cadastro de Imóveis</a>
                        </li> 
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="PesquisaServlet" method="get">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Pesquisar..." aria-label="Search">
                        <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            <div id="app" class="container-fluid m-1">
                <br>
                <ul class="list-group list-group-flush">       
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">REF</th>
                                <th scope="col">CEP</th>
                                <th scope="col">DORMITÓRIOS</th>
                                <th scope="col">SUÍTE</th>
                                <th scope="col">SALA</th>
                                <th scope="col">BANHEIRO</th>
                                <th scope="col">COZINHA</th>
                                <th scope="col">QUINTAL</th>
                                <th class="text-end" scope="col">VALOR</th>
                                <th scope="col">EDITAR/DELETAR</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1.000</td>
                                <td>
                                    <button type="button" class="btn btn-outline-info">Editar</button>
                                    <button type="button" class="btn btn-outline-danger">Deletar</button>
                                </td>                        
                            </tr>
                        </tbody>
                    </table>
                </ul>
            </div>   
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
>>>>>>> e5a54b5e50b06d82145ea359289ea56ed4d9eb49