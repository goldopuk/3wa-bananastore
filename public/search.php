<?php
include '../services/tools.php';
include '../services/productService.php';

$word = $_GET['word'];

$products = getProductList($word);

include '../views/search.phtml';
