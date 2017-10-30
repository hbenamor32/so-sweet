<?php

define('PROD_NAME', 'prod_name'); // Nom de produit (string)
define('PROD_CAT', 'prod_cat'); // Id de la catégorie du produit (string)
define('PROD_PRIX', 'prod_prix'); // Id de la catégorie du produit (string)
define('PROD_IMG1', 'prod_img1'); // Fichier image (principal) du produit (string)
define('PROD_IMG2', 'prod_img2'); // Autre fichier image du produit, optionnel, vide si absent  (string)
define('PROD_IMG3', 'prod_img3'); // Autre fichier image du produit, optionnel, vide si absent (string)
define('PROD_DESC_C', 'prod_desc_c'); // Description courte du produit (string)
define('PROD_DESC_D', 'prod_desc_d'); // Description détaillée du produit (string - HTML)
define('ART_PRICE', 'art_price');

$products = array(
    '1' => array(
        PROD_NAME => 'Twejen amande',
        PROD_CAT => 'sucres',
		PROD_PRIX => '3.9',
        PROD_IMG1 => 'produits/twejen-amande.jpg',
        PROD_DESC_C => 'Twejen amande',
        PROD_DESC_D => '<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',ART_PRICE => '50'
    ),

    '2' => array(
        PROD_NAME => 'Rondelle orange amande',
        PROD_CAT => 'sucres',
		PROD_PRIX => '2.9',
        PROD_IMG1 => 'produits/rondelle-orange.jpg',
        PROD_DESC_C => 'Rondelle orange amande',
        PROD_DESC_D => '<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ),

    '3' => array(
        PROD_NAME => 'Kaak warka arc en ciel',
        PROD_CAT => 'sucres',
		PROD_PRIX => '4',
        PROD_IMG1 => 'produits/arc-en-ciel.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '
	<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '4' => array(
        PROD_NAME => 'Dentelline',
        PROD_CAT => 'sucres',
		PROD_PRIX => '3.2',
        PROD_IMG1 => 'produits/dantelline-panache.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '<h3 style="text-align: justify;">
		Le produit</h3>
	
	<h3 style="text-align: justify;">
		Le produit</h3>
	<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),
   


    '5' => array(
        PROD_NAME => 'Verrine fruit de mer',
        PROD_CAT => 'sales',
		PROD_PRIX => '2.5',
        PROD_IMG1 => 'produits/verrine-fruit-de-mer.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '6' => array(
        PROD_NAME => 'Tarte saumon',
        PROD_CAT => 'sales',
		PROD_PRIX => '3',
        PROD_IMG1 => 'produits/tarte-saumon.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '<h3 style="text-align: justify;">
		Le produit</h3>
	
	<h3 style="text-align: justify;">
		Le produit</h3>
	<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '7' => array(
        PROD_NAME => 'Tarte chevrette',
        PROD_CAT => 'sales',
		PROD_PRIX => '2',
        PROD_IMG1 => 'produits/tarte-chevrette.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '8' => array(
        PROD_NAME => 'Sinya melha',
        PROD_CAT => 'sales',
		PROD_PRIX => '2.2',
        PROD_IMG1 => 'produits/sinya-melha.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ),

   

    '9' => array(
        PROD_NAME => 'Pêche',
        PROD_CAT => 'boissons',
		PROD_PRIX => '1.9',
        PROD_IMG1 => 'produits/jus-peche.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '
	<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '10' => array(
        PROD_NAME => 'Orgeat pistache',
        PROD_CAT => 'boissons',
		PROD_PRIX => '2.5',
        PROD_IMG1 => 'produits/orgeat-pisstache.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '<h3 style="text-align: justify;">
		Le produit</h3>'
    ),

    '11' => array(
        PROD_NAME => 'Orgeat amande',
        PROD_CAT => 'boissons',
		PROD_PRIX => '2',
        PROD_IMG1 => 'produits/orgeat-amande.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '<h3 style="text-align: justify;">
		Le produit</h3> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ),

    '12' => array(
        PROD_NAME => 'Kiwi',
        PROD_CAT => 'boissons',
		PROD_PRIX => '3.2',
        PROD_IMG1 => 'produits/jus-pistache.jpg',
        PROD_DESC_C => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        PROD_DESC_D => '<h3 style="text-align: justify;">
		Le produit</h3>
	<p style="text-align: justify;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ),

   
);
?>