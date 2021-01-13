<?php

session_start();

include('connect.php');

date_default_timezone_set("Asia/Colombo"); 



$a1 = $_POST['name'];
$mechanic = $_POST['mechanic'];
$d = $_POST['km'];
$comment = $_POST['comment'];
$type = $_POST['type'];


$result = $db->prepare("SELECT * FROM customer WHERE customer_id = '$a1' ");

		$result->bindParam(':userid', $res);

		$result->execute();

		for($i=0; $row = $result->fetch(); $i++){

            $c = $row['customer_name'];
			 $model = $row['model'];

			$a = $row['vehicle_no'];
			$iina = "-22".$row['vehicle_no'];

		}

$b = date("ymdhis");


$sql = "UPDATE  sales_list
        SET invoice_no=?
		WHERE invoice_no=?";
$q = $db->prepare($sql);
$q->execute(array($b,$iina));

$e = date("Y-m-d");

$f = $_SESSION['SESS_FIRST_NAME'];



// query

$sql = "INSERT INTO sales (vehicle_no,invoice_number,customer_name,km,date,cashier,comment,type,customer_id,model,mechanic) VALUES (:a,:b,:c,:d,:e,:f,:j,:type,:cus_id,:model,:mech)";

$ql = $db->prepare($sql);

$ql->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':j'=>$comment,':type'=>$type,':cus_id'=>$a1,':model'=>$model,':mech'=>$mechanic));

header("location: sales.php?id=$b");





?>