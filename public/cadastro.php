<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>L.A.Rosa imóveis - Cadastro</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Danfo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
    <style>
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
            .radio-buttons-container {
                display: flex;
                align-items: center;
                gap: 24px;
                flex-wrap: wrap;
            }
            .radio-button {
                display: inline-block;
                position: relative;
                cursor: pointer;
            }
            .radio-button__input {
                position: absolute;
                opacity: 0;
                width: 0;
                height: 0;
            }
            .radio-button__label {
                display: inline-block;
                padding-left: 30px;
                margin-bottom: 10px;
                position: relative;
                font-size: 16px;
                color: #FFFFFF;
                cursor: pointer;
                transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
            }
            .radio-button__custom {
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                width: 20px;
                height: 20px;
                border-radius: 50%;
                border: 2px solid #FFFFFF;
                transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
            }
            .radio-button__input:checked + .radio-button__label .radio-button__custom {
                transform: translateY(-50%) scale(0.9);
                border: 5px solid #FFE88A;
                color: #FFE88A;
            }
            .radio-button__input:checked + .radio-button__label {
                color: #FFE88A;
            }
            .radio-button__label:hover .radio-button__custom {
                transform: translateY(-50%) scale(1.2);
                border-color: #FFE88A;
                box-shadow: 0 0 10px #FFE88A80;
            }
            button {
                position: relative;
                border: none;
                background: transparent;
                padding: 0;
                cursor: pointer;
                outline-offset: 4px;
                transition: filter 250ms;
                user-select: none;
                touch-action: manipulation;
            }

            .shadow {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 12px;
                background: hsl(0deg 0% 0% / 0.25);
                will-change: transform;
                transform: translateY(2px);
                transition: transform
                    600ms
                    cubic-bezier(.3, .7, .4, 1);
            }

            .edge {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 12px;
                background: linear-gradient(
                    to left,
                    hsl(45deg, 100%, 50%) 0%,
                    hsl(45deg, 100%, 70%) 8%,
                    hsl(45deg, 100%, 70%) 92%,
                    hsl(45deg, 100%, 90%) 100%
                    );
            }

            .front {
                display: block;
                position: relative;
                padding: 12px 27px;
                border-radius: 12px;
                font-size: 1.1rem;
                color: black;
                background: hsl(45deg, 100%, 70%);
                will-change: transform;
                transform: translateY(-4px);
                transition: transform
                    600ms
                    cubic-bezier(.3, .7, .4, 1);
            }

            button:hover {
                filter: brightness(115%);
            }

            button:hover .front {
                transform: translateY(-6px);
                transition: transform
                    250ms
                    cubic-bezier(.3, .7, .4, 1.5);
            }

            button:active .front {
                transform: translateY(-2px);
                transition: transform 34ms;
            }

            button:hover .shadow {
                transform: translateY(4px);
                transition: transform
                    250ms
                    cubic-bezier(.3, .7, .4, 1.5);
            }

            button:active .shadow {
                transform: translateY(1px);
                transition: transform 34ms;
            }

            button:focus:not(:focus-visible) {
                outline: none;
            }

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
            h1, label {
                color: #FFFFFF;
                text-align: center;
            }
        </style>
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
    </head>
    <body>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center">Cadastro de Imóveis</h1><br>
                    <form id="imovelForm" action="ImovelServlet" method="post" class="needs-validation" novalidate>
                        <div class="form-group">

                            <div class="radio-buttons-container">
                                <label for="tipo">Tipo de Imóvel:</label>
                                <div class="radio-button">
                                    <input name="tipo" id="radio_casa" class="radio-button__input" type="radio" value="Casa" required>
                                    <label for="radio_casa" class="radio-button__label">
                                        <span class="radio-button__custom"></span>
                                        Casa
                                    </label>
                                </div>
                                <div class="radio-button">
                                    <input name="tipo" id="radio_apartamento" class="radio-button__input" type="radio" value="Apartamento">
                                    <label for="radio_apartamento" class="radio-button__label">
                                        <span class="radio-button__custom"></span>
                                        Apartamento
                                    </label>
                                </div>
                                <div class="radio-button">
                                    <input name="tipo" id="radio_terreno" class="radio-button__input" type="radio" value="Terreno">
                                    <label for="radio_terreno" class="radio-button__label">
                                        <span class="radio-button__custom"></span>
                                        Terreno
                                    </label>
                                </div>
                                <div class="radio-button">
                                    <input name="tipo" id="radio_comercial" class="radio-button__input" type="radio" value="Comercial">
                                    <label for="radio_comercial" class="radio-button__label">
                                        <span class="radio-button__custom"></span>
                                        Comercial
                                    </label>
                                </div>
                                <div class="radio-button">
                                    <input name="tipo" id="radio_outro" class="radio-button__input" type="radio" value="Outro">
                                    <label for="radio_outro" class="radio-button__label">
                                        <span class="radio-button__custom"></span>
                                        Outro
                                    </label>

                                </div>
                            </div>

                            <div class="form-group">
                                <hr>
                                <input type="text" class="form-control" id="referencial" name="referencial" placeholder="Referencial" required>
                                <div class="invalid-feedback">Por favor, insira o Referencial do imóvel.</div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
                                <div class="invalid-feedback">Por favor, insira o CEP do imóvel.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="dormitorios" name="dormitorios" placeholder="Dormitórios" required>
                            <div class="invalid-feedback">Por favor, insira o número de dormitórios.</div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="suite" name="suite" placeholder="Suíte" required>
                            <div class="invalid-feedback">Por favor, insira o número de suítes.</div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="sala" name="sala" placeholder="Sala" required>
                            <div class="invalid-feedback">Por favor, insira o número de salas.</div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="banheiro" name="banheiro" placeholder="Banheiro" required>
                            <div class="invalid-feedback">Por favor, insira o número de banheiros.</div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="cozinha" name="cozinha" placeholder="Cozinha" required>
                            <div class="invalid-feedback">Por favor, insira o número de cozinhas.</div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="quintal" name="quintal" placeholder="Quintal" required>
                            <div class="invalid-feedback">Por favor, insira informações sobre o quintal.</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor do Imóvel" required>
                            <div class="invalid-feedback">Por favor, insira o valor do imóvel.</div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="d-grid gap-2"> 
                                <button>
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front text"> Salvar
                                    </span>
                                </button>
                            </div>   
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </ul>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>      
    <script>
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            

            document.getElementById('cep').addEventListener('input', function (e) {
                let x = e.target.value.replace(/\D/g, '').match(/(\d{0,5})(\d{0,3})/);
                e.target.value = x[1] + (x[2] ? '-' + x[2] : '');
            });

            const naturalNumberFields = ['referencial', 'dormitorios', 'suite', 'sala', 'banheiro', 'cozinha', 'quintal'];
            naturalNumberFields.forEach(id => {
                document.getElementById(id).addEventListener('input', function (e) {
                    e.target.value = e.target.value.replace(/\D/g, '');
                });
            });

             document.getElementById('valor').addEventListener('input', function (e) {
                    let a = e.target.value.replace(/\D/g, '');
                    a = (a / 100).toFixed(2) + '';
                    a = a.replace(".", ",");
                    a = a.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
                    e.target.value = a;
                });
        </script>    
</body>
</html>