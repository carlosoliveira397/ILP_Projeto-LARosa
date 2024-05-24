<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>L.A.Rosa imóveis - Cadastro</title>
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="${pageContext.request.contextPath}/index.php">
        <i class="bi bi-house-door-fill"></i>
        L.A Rosa
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="${pageContext.request.contextPath}/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="${pageContext.request.contextPath}/cadastro.php">Cadastro</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>              
                <h1>Ficha de Captação</h1>

        <form>
            
            Referencial<input type="text" name="ref"><br>
            CEP<input type="text" name="ref"><br>
            Endereço<input type="text" name="log"><br>
            Número<input type="number" name="num"><br>
            Complemento<input type="text" name="cop"><br>
            Bairro<input type="text" name="bai"><br>
            Cidade<input type="text" name="cid"><br>
            UF<input type="text" name="uf"><br><br>
            Quantidade de:<br><br>
            Dormitório(s): <input type="number" name="dor"><br> 
            Suíte(s): <input type="number" name="sui"><br> 
            Sala(s): <input type="number" name="sal"><br> 
            Banheiro(s): <input type="number" name="ban"><br> 
            Cozinha(s): <input type="number" name="coz"><br> 
            Quintal(is): <input type="number" name="qui"><br><br>
            Valor(R$)<input type="number" name="val"><br>
            <input type="submit" name=""><br>
            
        </form>
        
    </body>
</html>