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
								<a href="view_att.php" role="button" class="green" data-toggle="modal"> View Attendance </a>
							</h4>

							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid">
								
								<div class="table-header">
									STUDENT-ATTENDANCE INFORMATION						</div>

									
<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="attend1.php">
  <p>&nbsp;</p>
  								<table  class="table table-striped table-bordered table-hover">
									<thead>

      <tr>
      <th>Course</th>
      <th><select name="course" id="course">
        <option>MCA</option>
        <option>MBA</option>
		<option>MTech</option>
		<option>Computer Science</option>
		<option>Mechanical</option>
		<option>Automobile</option>
		<option>Civil</option>
		<option>E & E</option>
		<option>E & C</option>
		<option>IS</option>
      </select></th>
    
      <th>Semester</th>
      <th><select name="sem" id="sem">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
		<option>7</option>
        <option>8</option>
      </select></th>
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

