<?php
include '../services/tools.php';
include '../services/productService.php';

$products = getProductList();


include '../views/home.phtml';