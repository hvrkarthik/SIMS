<!DOCTYPE html>
<html lang="en">
	<head>
	<?php include('metatags.php'); ?>
	</head>

	<body>
	  <?php include('navbar.php'); ?>

		<div class="main-container container-fluid">
			

			<?php include('sidebar.php');  ?>
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>							</span>						</li>
						<li class="active">Dashboard</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->


							<div class="hr hr-18 dotted hr-double"></div>

							<h4 class="pink">
								<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
								<a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
							</h4>

							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid">
								
								<div class="table-header">
									STUDENT-ATTENDANCE INFORMATION						</div>

									
<?php include('val.php');
$course=$_POST['course'];
$sem=$_POST['sem'];
?>
<form name="formID" id="formID" method="post" action="attend2.php">
  <p>&nbsp;</p>
  <input type="hidden" name="course" value="<?php echo $course; ?>">
  <input type="hidden" name="sem" value="<?php echo $sem; ?>">  
  								<table  class="table table-striped table-bordered table-hover">
									<thead>

    <tr>
      <th>Subject</th>
      <th><select name="subject_id" id="subject_id">
	  <?php
	 include('db.php');
	 $sql="select * from sub where course='$course' and sem='$sem'";
	 $res=mysql_query($sql);
	 while($row1=mysql_fetch_array($res))
	 {
	 ?>
	 
	 <option value="<?php echo $row1['subject_id']; ?>" selected> <?php echo $row1['s_name'];  ?> </option>
	<?php
	}
	?>	
      </select></th>
    </tr>

<tr>
      <th width="103">Attendance_date</th>
      <th width="161"><input name="att_date" type="text" id="att_date" value="<?php echo date('Y-m-d'); ?>"></th>
    </tr>
    <tr>
      <th>Timing</th>
      <th><input name="timing" type="text" id="timing" class="validate[required]"></th>
    </tr>
    <tr>
      <th colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></th>
    </tr>
	</thead>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
</form>

										
						  </div>
								</div>

							
							</div>

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

               <?php include('settings.php'); ?>
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<?php include('scripts.php'); ?>
	</body>
</html>

