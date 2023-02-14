<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

use app\Autoloader;
use app\App;

require_once '../app/Autoloader.php';
Autoloader::register();

// $app = App::getTable('Users');
var_dump(App::getTable('posts'));
var_dump(App::getTable('users'));
var_dump(App::getTable('categories'));


// if (isset($_GET['p'])) 
// {
//     $p = $_GET['p'];
// }
// else {
//     $p = 'home';
// }

// // Initialisation de la DB


// ob_start();
// if ($p === 'home') {
//     require '../pages/home.php';
// } elseif ($p === 'article') {
//     require '../pages/single.php';
// }elseif ($p === 'categorie') {
//     require '../pages/categorie.php';
// }

// $content = ob_get_clean();
// require '../pages/template/default.php';