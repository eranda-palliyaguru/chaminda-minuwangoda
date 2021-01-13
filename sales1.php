<!DOCTYPE html>
<html>
<?php 
include("head.php");
include("connect.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<?php 
include_once("auth.php");
$r=$_SESSION['SESS_LAST_NAME'];

if($r =='Cashier'){

include_once("sidebar2.php");
}
if($r =='admin'){

include_once("sidebar.php");
}
?>




<link rel="stylesheet" href="datepicker.css"
        type="text/css" media="all" />
    <script src="datepicker.js" type="text/javascript"></script>
    <script src="datepicker.ui.min.js"
        type="text/javascript"></script>
 <script type="text/javascript">
     
		 $(function(){
        $("#datepicker1").datepicker({ dateFormat: 'yy/mm/dd' });
        $("#datepicker2").datepicker({ dateFormat: 'yy/mm/dd' });
       
    });

    </script>




    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sales Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Sales Form</li>
      </ol>
    </section>
<a rel="facebox" href="mechanic.php" class="btn btn-info">Add Mechanic</a>
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Sales</h3>

          
        <!-- /.box-header -->
		<div class="form-group">
              
		<form method="post" action="sales_save1.php">		
        <div class="box-body">
    <!-- /.box -->
<div class="form-group">		
	<div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				   <div class="input-group-addon">
                    <label>Customer	Name</label>
					   
                  </div>
                <select class="form-control select2" name="name" style="width: 100%;" autofocus required>
				  <?php 
                $result = $db->prepare("SELECT * FROM customer ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['customer_id'];?>"><?php echo $row['customer_name']; ?> <?php echo $row['vehicle_no']; ?>   </option>
	<?php
				}
			?>
                </select>
                  </div>
                  </div>
				</div>
			  
			  
			  <div class="col-md-4">
			  <div class="form-group">
               

                <div class="input-group date">
                  
                   <input type="number" class="form-control" name="km" required>
				   <div class="input-group-addon">
                    <label>Km</label>
                  </div>
                </div>
				
        </div>
		
        </div>
			  
			  
			  
			  
			  
			  
			  
			  <div class="col-md-4">
			  <div class="form-group">
                <div class="input-group date"> 
					<div class="input-group-addon">
                    <label>Comment</label>
                  </div>
                   <input type="text" class="form-control" name="comment" >				   
                </div>				
        </div>		
        </div>
			 <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				   <div class="input-group-addon">
                    <label>Type</label>
					   
                  </div>
                <select class="form-control select2" name="type" style="width: 100%;"  required>
				  <option></option>
		            <option>Free  Service</option>
					<option>Warranty Service</option>
					<option>Normal Service</option>
	
                </select>
                  </div>
                  </div>
				</div>  
			  
			  
			  <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				   <div class="input-group-addon">
                    <label>Mechanic	Name</label>
					   
                  </div>
                <select class="form-control select2" name="mechanic" style="width: 100%;"  required>
				  <?php 
                $result = $db->prepare("SELECT * FROM mechanic ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
					<option></option>
		<option value="<?php echo $row['name'];?>"><?php echo $row['name']; ?>  </option>
	<?php
				}
			?>
                </select>
                  </div>
                  </div>
				</div>
			  
			  
              </div>        
              </div>
			  <input class="btn btn-info" type="submit" value="Submit" >
			  
			  </form>
			
			
			
		
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
       

        
            <!-- /.box-body -->
            
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Direct Sales</h3>

          
        <!-- /.box-header -->
		<div class="form-group">
              
		<form method="post" action="sales_save2.php">		
        <div class="box-body">
    <!-- /.box -->
<div class="form-group">		
	<div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				   <div class="input-group-addon">
                    <label>Vehicle No</label>
					   
                  </div>
<input type="text" name="vehicle_no"  class="form-control" data-inputmask='"mask": "AAA-9999"' data-mask required>
                  </div>
                  </div>
				</div>
			  
			  
			  <div class="col-md-4">
			  <div class="form-group">
               

                <div class="input-group">
                  
                  
					<div class="input-group-addon">
                    <label>Model</label>
					   
                  </div>
                <select class="form-control select2" name="model" style="width: 100%;" autofocus >
                  
                  
				  <?php
                $result = $db->prepare("SELECT * FROM model ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['name'];?>"><?php echo $row['name']; ?>    </option>
	<?php
				}
			?>
                </select>
                </div>
				
        </div>
		
        </div>
			  
			  
			  
			  
			  
			  <input type="hidden" value="Normal Service" name="type">
			  
			  <div class="col-md-4">
			  <div class="form-group">
                <div class="input-group date"> 
					<div class="input-group-addon">
                    <label>Comment</label>
                  </div>
                   <input type="text" class="form-control" name="comment" >				   
                </div>				
        </div>		
        </div>
			 <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				    <input type="number" class="form-control" name="km" >
				   <div class="input-group-addon">
                    <label>Km</label>
                  </div>
					  
					  
                  </div>
                  </div>
				</div>  
			  
			  
			  
              </div>        
              </div>
			  <input class="btn btn-danger" type="submit" value="Submit" >
			  
			  </form>
			
			
			
		
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
       

        
            <!-- /.box-body -->
            
            </div>
          </div>
			<form method="post" action="sales_save3.php">		
        <div class="box-body">
    <!-- /.box -->
<div class="form-group">		
	<div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
				  <div class="input-group">
				   <div class="input-group-addon">
                    <label>Vehicle No.</label>
					   
                  </div>
<input type="text" name="vehicle_no"  class="form-control" data-inputmask='"mask": "AAA-9999"' data-mask required>
			<div class="input-group-btn">
                   <input class="btn btn-primary" type="submit" value="Go to Shop Sales" >
					   
                  </div>
                  </div>
                  </div>
				</div>
		</div>
              </div>
			    
			  </form>
		<form method="post" enctype="multipart/form-data"  >
		
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>File</label>
                <input type="file" name="file" required>
				</div>
              </div>
			  
		

      
			  
			  
			  
			  
			  <input class="btn btn-info" type="submit" name="sub" value="inport" >
			  
			  </form>
		<?php
include("csv4.php");
$csv = new csv();

if (isset($_POST['sub'])) {
	$csv->inport($_FILES ['file']['tmp_name']);
}

			
			echo "<br>";
			
$ip = "1992/1/15";
    $split = explode("/", $ip);
    $y= $split[0];
			$m= $split[1];
			$d= $split[2];
			
			$f=$d."-".$m."-".$y;
			echo $f;
?>
    </section>
	  
	  
	  
	  
	  
	  
	  
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
    <?php
  include("dounbr.php");
?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("YYYY/MM/DD", {"placeholder": "YYYY/MM/DD"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("YYYY/MM/DD", {"placeholder": "YYYY/MM/DD"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
