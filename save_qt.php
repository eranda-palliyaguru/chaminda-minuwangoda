<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Colombo");
$a1 = $_POST['invoice'];

$vehicle_no = $_POST['vehicle_no'];
//$c = $_POST['cus_name'];
$result = $db->prepare("SELECT sum(price) FROM sales_list WHERE invoice_no = '$a1' ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
            $a = $row['sum(price)'];
			
			
		}


$result = $db->prepare("SELECT sum(profit) FROM sales_list WHERE invoice_no = '$a1' ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
        $profit = $row['sum(profit)'];	
		}



$c = "active";
$date=date("Y-m-d");
$cashi = $_SESSION['SESS_FIRST_NAME'];
// query
$sql = "INSERT INTO sales (vehicle_no,invoice_number,date,cashier,amount,balance,action) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$ql = $db->prepare($sql);
$ql->execute(array(':a'=>$vehicle_no,':b'=>$a1,':c'=>$date,':d'=>$cashi,':e'=>$a,':f'=>"0",':g'=>"Quotations"));


header("location: bill.php?id=$a1&vehicle_no=$vehicle_no");


?>