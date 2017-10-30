<?php

define('CAT_LINK', 'cat_link');
define('CAT_NAME', 'cat_name'); // Nom de catégorie (string)
define('CAT_IMG', 'cat_img'); // Fichier image de catégorie (string)
define('CAT_DESC', 'cat_desc'); // Description de catégorie (string - HTML)

$categories = array(
    '1' => array(
		CAT_LINK => 'sucres',
        CAT_NAME => 'Nos délices <br>sucrés',
        CAT_IMG => 'sucres.png',
        CAT_DESC => 'Nos produits sucrés : AMANDE, Noisette et fekiav, Nos produits sucrés Pistache et pignon, Tradition, Petit déj, Macarons, Calissons, Dattes farcies, Gâteaux, Chocolat...
',
    ),
    '2' => array(
		CAT_LINK => 'sales',
        CAT_NAME => 'Nos amuse bouche <br>salés',
        CAT_IMG => 'sale.jpg',
        CAT_DESC => 'Verrine fruit de mer, Tarte saumon,Tarte au chevrette, Sinya melha...',
    ),
    '3' => array(
		CAT_LINK => 'boissons',
        CAT_NAME => 'Nos boissons <br>rafraichissantes',
        CAT_IMG => 'boissons.jpg',
        CAT_DESC => 'Pêche, Orgeat pistache, Orgeat amande, Kiwi...
.',
    )



);
?>