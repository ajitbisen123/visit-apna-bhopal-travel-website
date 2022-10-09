<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
echo "success connecting to the db";
  $sql=INSERT INTO `ft` (`Name`, `Email`, `Phone`, `Address`, `Where to`, `How many`, `Arrivals`, `Leaving`, `Submit`) VALUES ('tguyghtyt', 'yytyt', '678798', 'yutu', 'ytuyt', '3', 'rergtr', 'etr', 'et');

?>