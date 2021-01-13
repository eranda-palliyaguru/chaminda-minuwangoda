<!DOCTYPE html>
<html>
<head>
	<?php
		  include("connect.php");
	

			?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CLOUD ARM | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print() " style=" font-size: 13px; font-family: arial;">
<?php
$sec = "1";
?><meta http-equiv="refresh" content="<?php echo $sec;?>;URL='sales_rp.php?d1=<?php echo $_GET['d1']; ?>&d2=<?php echo $_GET['d2']; ?>'">	
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">

            <div class="box-body">

           <table id="example1" class="table table-bordered table-striped">
			  
                <thead>
                <tr>
                  <th>Code</th>
				  <th>Name</th>
                  <th>Sell QTY</th>
				  <th>Indian QTY</th>
					<th>Company QTY</th>
                </tr>
				
                </thead>
				
                <tbody>
				<?php
   $d1=$_GET['d1'];
   $d2=$_GET['d2'];
   $tot=0;
   $result1 = $db->prepare("SELECT * FROM product   ");
   $result1->bindParam(':userid', $date);
   $result1->execute();
   for($i=0; $row = $result1->fetch(); $i++){
	$code=$row['code'];			
	   
	   
	$result = $db->prepare("SELECT count(id) FROM sales_list WHERE code = '$code' and action='1' and  date BETWEEN '$d1' AND '$d2' ");
	$result->bindParam(':userid', $res);
	$result->execute();
		for($i=0; $row1 = $result->fetch(); $i++){
            $b = $row1['count(id)'];
		
		if($b==0){}else{			
				
				
			?>
                <tr>
				  <td><?php echo $row['code'];?></td>
				  <td><?php echo $row['name'];?></td>
                  <td><?php echo $b;?></td>
                  <td><?php echo $row['qty'];?></td>
                  <td><?php echo $row['qty_com'];?></td>
<?php }}	} ?>
                </tr>
               
                
                </tbody>
                <tfoot>
                
				
				
				
				
				
				
                </tfoot>
              </table>
				<div class="row">
<center>
				<h3>Total Rs.<?php echo $tot; ?>.00</h3>
					</center>
				</div></div>
  </section>
</div>
</body>
</html>