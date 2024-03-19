<?php 
$dbserver ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='restaurant_admin';

$connect = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

if (!$connect) {
die("Connection failed: " . mysqli_connect_error());

}
else{
    echo "Connection successfull";
}


?>