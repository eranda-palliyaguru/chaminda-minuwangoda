<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Colombo");
$a1 = $_GET['id'];


$result = $db->prepare("SELECT * FROM sales_list WHERE invoice_no = '$a1' ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
        $id = $row['code'];
		$qty = $row['qty'];
			
$sql = "UPDATE product 
        SET qty=qty+?
		WHERE code=?";
$q = $db->prepare($sql);
$q->execute(array($qty,$id));
		}

$c="3";
$sql = "UPDATE sales 
        SET type=?
		WHERE invoice_number=?";
$q = $db->prepare($sql);
$q->execute(array($c,$a1));

include('connect2.php');
$c="4";
$sql = "UPDATE sales 
        SET type=?
		WHERE invoice_number=?";
$q = $db->prepare($sql);
$q->execute(array($c,$a1));

header("location: transfer.php");
?>