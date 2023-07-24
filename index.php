<?php 
// phpinfo(); // c'est utile pour trouver des infos php installer
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$name = 'gaulois';
$user = 'root';
$password = '';

try {
    $db = new PDO(
        'mysql:host='.$host.';dbname='.$name.';charset=utf8',
        $user,
        $password,
    );
}
catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$sqlQuery = 'SELECT nom_personnage 
                FROM personnage
                -- filtre uniquement les persoonage qui ont 1 pour id --
                WHERE id_lieu = 1 ';
$Statement = $db->prepare($sqlQuery);
$Statement->execute();
$personnages = $Statement->fetchAll();
// var_dump($personnage);


foreach ($personnages as $personnage){
?>
    <p><?php echo $personnage['nom_personnage']; ?></p>
<?php
}


?>