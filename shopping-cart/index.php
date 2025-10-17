<?php
//Inicialización
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Declaración de funciones
include("./funciones/funciones.php");

//Lógica de negocio
$productosTienda = [
	0 => [
		'nombre' => 'iPhone 11',
		'tamano' => 'A3',
		'memoria' => '400GB',
		'ram' => '4GB',
		'precio' => 120,
		'imagen_url' => 'assets/img/image1.jpg'
	],
	1 => [
		'nombre' => 'iPhone 12',
		'tamano' => 'A2',
		'memoria' => '500GB',
		'ram' => '8GB,',
		'precio' => 240,
		'imagen_url' => 'assets/img/image2.jpg'
	],
	2 => [
		'nombre' => 'iPhone 16',
		'tamano' => 'A1',
		'memoria' => '800GB',
		'ram' => '16GB,',
		'precio' => 800,
		'imagen_url' => 'assets/img/image3.jpg'
	]
	];

//Lógica de presentación

$listaProductosMarkup = getProductosMarkup($productosTienda);

include('./templates/index.tpl.php');

?>
