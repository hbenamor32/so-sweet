<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$page = "accueil";
?>
<head>
    <meta charset=utf-8"/>
    <title>So sweet | Pâtisserie oriontale traditionnelle</title>
    <meta name="description" content="So sweet | Pâtisserie oriontale traditionnelle"/>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="styles/fonts.css" rel="stylesheet" type="text/css"/>
    <link href="styles/main.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

</head>
<body>
<!--Header-->
<?php require_once 'views/header.php' ?>
<!--End Header-->

<!--Content-->
<div class="page">
    <section class="boxes">
        <div class="container">
            <div class="col-sm-12">
                <h2>Découvrir nos évènements</h2>
                <div class="col-sm-6">
                    <div class="box box01">
                        <img class="img-responsive" src="images/entreprise.jpg" alt="So Sweet - Notre entreprise"/>
                        <h3>Entreprise </h3>
                        <a href="ceremonie-enreprise.php" class="link">link</a></div>
                </div>
                <div class="col-sm-6">
                    <div class="box box02">
                        <img class="img-responsive" src="images/ceremonie.jpg" alt="So Sweet - Cérémonie"/>
                        <h3>Cérémonie</h3>
                        <a href="ceremonie-enreprise.php" class="link">link</a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="produits">
        <div class="container">
            <div class="col-sm-6">

                <div class="col-sm-6">
                    <div class="prod prod01">
                        <img class="img-responsive" src="images/kaak-warka.jpg"/>
                        <h4>kaak-warka</h4>
                        <div class="prix">3.900dt/100g</div>
                        <a href="#" class="link">link</a></div>
                </div>
                <div class="col-sm-6">
                    <div class="prod prod02">
                        <img class="img-responsive" src="images/baklawa.jpg"/>
                        <h4>Baklawa</h4>
                        <div class="prix">4dt/100g</div>
                        <a href="#" class="link">link</a></div>
                </div>
            </div>
            <div class="col-sm-6">

                <h2>Découvrir<br/>
                    <span class="subtitle">nos offres inédites</span></h2>
                <ul class="tags">
                    <li><a href="produits.php?categories=sucres" class="tag tag5">Sucrés</a></li>
                    <li><a href="produits.php?categories=boissons" class="tag tag4">Boissons</a></li>
                    <li><a href="produits.php?categories=sales" class="tag tag6">tarte</a></li>
                    <li><a href="produits.php?categories=sucres" class="tag tag2">Rondelle</a></li>
                    <li><a href="produits.php?categories=sales" class="tag tag2">Fruit de mer</a></li>
                    <li><a href="produits.php?categories=sucres" class="tag tag4">Kaak warka</a></li>
                    <li><a href="produits.php?categories=sales" class="tag tag3">Salés</a></li>
                </ul>
            </div>


        </div>
    </section>
</div>
<!--End Content-->

<!--Footer-->
<footer>
    <div class="container">
        <?php require_once 'views/footer.php' ?>
    </div>
</footer>
<!--End Footer-->

</body>
</html>