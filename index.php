<?php 
// phpinfo(); // c'est utile pour trouver des infos php installer
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$name = 'gaulois';
$user = 'root';
$password = '';

try {
    $mysqlConnection = new PDO(
        'mysql:host='.$host.';dbname='.$name.';charset=utf8',
        $user,
        $password,
    );
}
catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}


?>