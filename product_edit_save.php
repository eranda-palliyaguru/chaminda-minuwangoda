<?php
session_start();
include('connect.php');
$a = $_POST['sell'];
$b = $_POST['cost'];
$id =$_POST['id'];



$sql = "UPDATE product 
        SET sell=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$id));

$sql = "UPDATE product 
        SET cost=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($b,$id));


header("location: product_view.php");


?>