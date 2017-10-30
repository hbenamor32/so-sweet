<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$page = "produits";


if (isset($_GET['categories'])) // On a le nom et le prénom
{
    $detail = $_GET['categories'];
} else // Il manque des paramètres, on avertit le visiteur
{
    $detail = "prod";
}

require_once('db/_data_categories.php'); // Les articles
require_once('db/_data_products.php'); // Les articles
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
    <section class="produits">
        <div class="container">
            <?php if ($detail == "prod") { ?>


                <h2>Découvrir <br/><span class="subtitle">Nos produits</span></h2>
                <section class="categ">
                    <?php foreach ($categories as $id => $item) { ?>
                        <aside class="col-sm-12">
                            <div class="box">
                                <div class="img-box col-sm-4"><img class="img-responsive"
                                                                   src="images/<?= $item[CAT_IMG] ?>"/></div>
                                <div class="col-sm-8">
                                    <h3><?= $item[CAT_NAME] ?></h3>
                                    <p><?= $item[CAT_DESC] ?></p>
                                    <a href="produits.php?categories=<?= $item[CAT_LINK] ?>">link</a></div>
                            </div>
                        </aside>
                    <?php } ?>
                </section>


            <?php } else { ?>

                <h2> Nos <?php echo $detail ?></h2>
                <div class="prods">   <?php foreach ($products as $id => $prod) {
                        if ($detail == $prod[PROD_CAT]) { ?>
                            <aside class="col-sm-6">
                                <div class="box prod prod01 ">
                                    <div class="img-box"><img class="img-responsive"
                                                              src="images/<?= $prod[PROD_IMG1] ?>"/></div>
                                    <h4><?= $prod[PROD_NAME] ?></h4>
                                    <div class="prix"><?= $prod[PROD_PRIX] ?> DT/100g</div>
                                    <a href="#" class="link">link</a></div>
                            </aside>


                        <?php }
                    } ?>
                </div>
            <?php } ?></div>
    </section>


</div>
<!--End Content-->

<!--Footer-->
<footer>
    <div class="container">
        <?php require_once 'views/footer.php' ?>
    </div>

</footer>
<!--En Footer-->
</body>
</html>