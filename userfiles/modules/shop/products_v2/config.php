<?php

$config = array();
$config['name'] = "ProductsV2";
$config['author'] = "decemberr18";
$config['no_cache'] = false;
$config['ui'] = true;
$config['categories'] = "online shop";
$config['version'] = 0.41;
$config['position'] = 21;


$config['settings']['service_provider'] = [
    \MicroweberPackages\Shop\Products\ProductsServiceProvider::class
];
