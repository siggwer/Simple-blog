<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap -->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.ico"/>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style_admin.css" rel="stylesheet">
    <link href="css/util.css" rel="stylesheet">

    <title>Mon compte</title>
</head>

<body>
<div id="wrapper">
<!--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="#" class="logo img-circle responsive photnav" alt="">Bievenue sur votre espace</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php">Retour à l'accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajouter un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?action=deconnexion">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>-->
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand"><?php if(isset($_SESSION['id'])){ echo $_SESSION['pseudo'];} else{echo 'auteur';}?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav side-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Retour à l'accueil</a>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addArticle">Ajouter un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/deconnexion">Déconnexion</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-md-auto d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="/">Retour à l'accueil</a>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addArticle">Ajouter un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/deconnexion">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- Main Content -->
<?= $content;?>


</div>
<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>