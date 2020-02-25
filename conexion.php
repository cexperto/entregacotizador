<?php
/*$server="localhost";
$user="root";
$pass="";
$bd="motos";

$conexion=mysqli_connect($server,$user,$pass,$bd);
if($conexion){
    //echo "exito";
}else{
    echo "pailas";
}
$dbHost = '198.136.62.62';

$dbUsername = 'ejxhyjxs_motos';

$dbPassword = 'pl$wbamqWA.2';

$dbName = 'ejxhyjxs_motos';

$dbHost = 'remotemysql.com';

$dbUsername = 'gu6EqlTj8p';

$dbPassword = 'sqYM6pwdQp';

$dbName = 'gu6EqlTj8p';*/
$dbHost = '198.136.62.62';
$dbUsername = 'ejxhyjxs_motos';
$dbPassword = 'pl$wbamqWA.2';
$dbName = 'ejxhyjxs_motos';




//Conectamos y seleccionamos la base de datos 198.136.62.62

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {

die("Conexión fallida:". $db->connect_error);

}

?>
