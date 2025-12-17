<?php
$HOSTNAME='wp.kongu.edu';
$USERNAME='24csee14';
$PASSWORD='24csee14';
$DATABASE='24csee14';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($conn){
    //echo("connected successfully");
}
else{
    die(mysqli_error($conn));
}
?>
