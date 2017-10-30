<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$page = "events";
?>
<head>
    <meta charset=utf-8"/>
    <title>So sweet | Cérémonie et Entreprise</title>
    <meta name="description" content="So sweet | Cérémonie et Entreprise"/>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="styles/fonts.css" rel="stylesheet" type="text/css"/>
    <link href="styles/main.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

<body>
<!--Header-->
<?php require_once 'views/header.php' ?>
<!--End Header-->

<!--Content-->
<div class="page">
    <section class="ceremonie">
        <div class="container">
            <h2>Cérémonie</h2>
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li><img src="images/ceremonie1.jpg" alt="So sweet" id="wows1_0"/></li>
                        <li><img src="images/ceremonie2.jpg" alt="So sweet" id="wows1_1"/></li>
                        <li><img src="images/ceremonie3.jpg" alt="So sweet" id="wows1_1"/></li>
                    </ul>
                </div>

                <div class="ws_shadow"></div>
            </div>
        </div>
    </section>
    <section class="entreprise">
        <div class="container">
            <h2>Entreprise</h2>
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li><img src="images/entreprise1.jpg" alt="So sweet" id="wows1_0"/></li>
                        <li><img src="images/entreprise2.jpg" alt="So sweet" id="wows1_1"/></li>
                    </ul>
                </div>
                <div class="ws_shadow"></div>
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
<!--En Footer-->

<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>
