<?php



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MercaStyle</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../Style/geralStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <div id="navBar"> 
        <div id="setting">
            <a href=""><i class="fas fa-bars"></i></a>
        </div>
        <div id="logo">
            <img src="./../Images/Logo.png" href="">
        </div>
        <div id="menu">
            <a id="option" href=""><i class="fas fa-home"></i> Início</a>
            <a id="option" href=""><i class="fas fa-users"></i> Sobre nós</a>
            <a id="option" href=""><i class="fas fa-phone-alt"></i> Contato</a>
            <a id="option" href=""><i class="fas fa-question-circle"></i> Ajuda</a>
        </div>

        <div id="loginECadastro">
            <a id="btnEntrar" href="./../Pages/Cadastro.php?form=login">Entrar na conta</a>
            <a id="btnCadastrar" href="Cadastro.php?form=cadastro">Cadastrar</a>
        </div>

        <div id="carrinho">
            <a href=""><i class="fas fa-shopping-cart"></i></a>
        </div>

        <div id="perfil">
            <a href=""><i class="fas fa-user"></i></a>
        </div>

        
    </div>
   
    <div id="content">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-center">
                <form class="d-flex mx-auto searchBar" role="search">
                    <input class="form-control me-2 caixaDePesquisa" type="search" placeholder="Buscar no MercaStyle..." aria-label="Buscar no MercaStyle...">
                    <button class="btn btn-outline-success btnPesquisa" type="submit"><i class="fas fa-magnifying-glass "></i></button>
                </form>
            </div>
        </nav>

        <hr class="linha">

        <div class="categorias">
            <a id="tags" href="">
                <i class="fas fa-truck"></i>
                <span>Frete Grátis</span> 
            </a>
            <a id="tags" href="">
                <i class="fas fa-tag"></i>
                <span>Promoções</span>
            </a>
            <a id="tags" href="">
                <i class="fas fa-t-shirt"></i> 
                <span>Moda</span>
            </a>
            <a id="tags" href="">
                <i class="fas fa-laptop"></i>
                <span>Eletrônico</span>
            </a>
        </div>

        <hr class="linha" id="linhaBaixo">

        
        
    </div>
    
    <div class="destaquesDoDia">

        <h2 class="title" id="destaques">Destaques do Dia</h2>

        <div class="container">

            <div class="row">
                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="produto1.jpg" class="card-img-top" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Blusa Cientista Caveira Amarela</h5>
                            <p class="card-text">R$ 25,90</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">Calça Esportiva Puma</h5>
                            <p class="card-text">R$ 20,56</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">USB SanDisk 64 GB 3.5</h5>
                            <p class="card-text">R$ 45,90</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Produto 4">
                        <div class="card-body">
                            <h5 class="card-title">Panela de Pressão de Aço</h5>
                            <p class="card-text">R$ 13,99</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Produto 5">
                        <div class="card-body">
                            <h5 class="card-title">Tênis Esportivo Adidas</h5>
                            <p class="card-text">R$ 43,33</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-4 col-md-2 col-lg-2 vitrine">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Produto 6">
                        <div class="card-body">
                            <h5 class="card-title">Moedor de Vegetais Recarregável</h5>
                            <p class="card-text">R$ 18,66</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>