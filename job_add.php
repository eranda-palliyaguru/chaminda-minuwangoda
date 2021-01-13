<!DOCTYPE html>
<html>
<?php 
include("head.php");
include("connect.php");
?>
<body class="hold-transition skin-red sidebar-mini layout-top-nav">
<?php 
//include_once("auth.php");
//$r=$_SESSION['SESS_LAST_NAME'];

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
 
<center>
    <!-- Main content -->
    <section class="content">
		
		<br>
		<a href="job.php" >
					  <button class="btn btn-info"><i class="glyphicon glyphicon-home"></i> Home</button></a>
		
		<br><br><br>
		<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">ADD NEW JOB</h3>
            </div>
			<div class="box-body">
		<form method="post" action="job_save.php">
			
				
			<div class="form-group has-success">		
			
 <label class="control-label" for="inputSuccess"><i class="fa fa-motorcycle"></i>	Vehicle Number</label>
				  
                <input style="width:120px" id="inputSuccess"  type="text" name="vehicle_no"  class="form-control input-lg" data-inputmask='"mask": "AAA-9999"' data-mask >
                 </div> 
                  
	
              <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"><i class="fa fa-dashboard"></i>	Mileage</label>
				  
                <input style="width:120px" id="inputWarning" type="number" name="km"  class="form-control" data-mask required>
                 </div>
			<div class="col-md-3">
				<label>Type</label>
			  <select class="form-control" name="type" style="width: 100%;" tabindex="1" autofocus >
				 
		<?php  $invo = $_GET['id'];
         $result = $db->prepare("SELECT * FROM job_type WHERE action='' ORDER by order_no ASC ");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){ ?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
	<?php	} ?>
                </select>
			</div>
				
                  <br><br>
		<label>	Job Note</label>
		<textarea name="note" class="textarea" placeholder="Note" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		<label>	Job Note - Product</label>
		<textarea name="note1" class="textarea" placeholder="Product" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		
			<label>	AA-xxxx</label>
<input style="width:120px"  type="text" name="vehicle_no2"  class="form-control" data-inputmask='"mask": "AA-9999"' data-mask >
			
              <div class="checkbox">
                    <label>
						<input type="hidden" name="helmet" >
                      <input type="checkbox" name="helmet" value="1">
						
                      Helmet
                    </label>
                  </div>
			<div class="checkbox">
                    <label>
						<input type="hidden" name="toolkit" >
                      <input type="checkbox" name="toolkit" value="1">
                      Tool Kit
                    </label>
                  </div>
			<div class="checkbox">
                    <label>
						<input type="hidden" name="carpet" >
                      <input type="checkbox" name="carpet" value="1">
                      Carpet
                    </label>
                  </div>
			<div class="checkbox">
                    <label>
						<input type="hidden" name="piuot_arm_cover" >
                      <input type="checkbox" name="piuot_arm_cover" value="1">
                      Pivot arm cover L
                    </label>
                  </div>
			<div class="checkbox">
                    <label>
						<input type="hidden" name="piuot_arm_cover_r" >
                      <input type="checkbox" name="piuot_arm_cover_r" value="1">
                      Pivot arm cover R
                    </label>
                  </div>		

				
			<br>
	<input class="btn btn-info" type="submit" value="NEXT >" >	
	</form>	
	</div></div>
		</center>
		
		
    </section>
	
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
    <?php
	
	
	

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
