<?php



function getProductList() {
	$user = 'root';
	$password = 'troiswa';

	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);

	$sql = "SELECT * FROM product";

	$statement = $db->query($sql, \PDO::FETCH_ASSOC);

	$products = [];

	foreach ($statement as $product)  {
		$products[] = $product;
	}

	return $products;
}


$list = getProductList();


print_r($list);
