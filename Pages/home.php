<?php



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MercaStyle</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../Style/geralStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <div id="navBar"> 
        <div>
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
                    <button class="btn btn-outline-success btnPesquisa" type="submit"><i class="fas fa-magnifying-glass"></i></button>
                </form>
            </div>
        </nav>

    </div>
</body>
</html>