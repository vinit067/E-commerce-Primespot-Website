<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// require Special Prices Class
require ('database/Special Prices.php');

// require New Releases Class
require ('database/New Releases.php');

// require laptopctg Class
require ('database/laptopctg.php');

// require laptopctg Class
require ('database/tvsub.php');

// require laptopctg Class
require ('database/mobilesub.php');

// require laptopctg Class
require ('database/homesub.php');

// require laptopctg Class
require ('database/officesub.php');

// require laptopctg Class
require ('database/decoresub.php');

// require laptopctg Class
require ('database/Menfashion.php');

// require laptopctg Class
require ('database/Womenfashion.php');

// require laptopctg Class
require ('database/Kidfashion.php');

// require laptopctg Class
require ('database/Snacks.php');

// require laptopctg Class
require ('database/Packaged.php');

// require laptopctg Class
require ('database/Babycare.php');

// require laptopctg Class
require ('database/Household.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Special Price object
$special_prices = new Special ($db);
$special_prices_shuffle = $special_prices->getData();

$new_releases = new Releases ($db);
$new_releases_shuffle = $new_releases->getData();

$sub_laptop = new sub($db);
$sub_laptop_shuffle = $sub_laptop->getData();

$sub_tv = new tv($db);
$sub_tv_shuffle = $sub_tv->getData();

$sub_mobile = new mobile($db);
$sub_mobile_shuffle = $sub_mobile->getData();

$sub_home = new home($db);
$sub_home_shuffle = $sub_home->getData();

$sub_office = new office($db);
$sub_office_shuffle = $sub_office->getData();

$sub_decor = new decor($db);
$sub_decor_shuffle = $sub_decor->getData();

$sub_men = new men($db);
$sub_men_shuffle = $sub_men->getData();

$sub_women = new women($db);
$sub_women_shuffle = $sub_women->getData();

$sub_kid = new kid($db);
$sub_kid_shuffle = $sub_kid->getData();

$sub_snack = new snack($db);
$sub_snack_shuffle = $sub_snack->getData();

$sub_packaged = new package($db);
$sub_packaged_shuffle = $sub_packaged->getData();

$sub_babycare = new babycare($db);
$sub_babycare_shuffle = $sub_babycare->getData();

$sub_household = new household($db);
$sub_household_shuffle = $sub_household->getData();


// Cart object
$Cart = new Cart($db );
