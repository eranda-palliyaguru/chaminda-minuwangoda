<?php
session_start();
include('connect.php');


$result = $db->prepare("SELECT * FROM csv ");
$result->bindParam(':userid', $d);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$invo=$row['ref'];
	$bik_no=$row['bik_no'];
	$date=$row['date'];
	$km=$row['mileg'];
	$amount=$row['total'];
	$labour=$row['labour'];
	$cmp_labour=$row['cmp_labor'];
	$type=$row['type'];
	
    $labor_cost= $cmp_labour+$labour;
	$action="active";
	
	
	
	$sql = "INSERT INTO sales (invoice_number,vehicle_no,date,km,amount,action,type,labor_cost) VALUES (:a,:b,:c,:d,:e,:f,:g,:pro)";
$ql = $db->prepare($sql);
$ql->execute(array(':a'=>$invo,':b'=>$bik_no,':c'=>$date,':d'=>$km,':e'=>$amount,':f'=>$action,':g'=>$type,':pro'=>$labor_cost));
				}
?>