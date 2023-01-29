<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<body>



<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li><a href="#">Library</a><span class="divider">&raquo;</span></li>
			<li class="active">Data</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5><i class="black-icons blocks_images"></i> FEES</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
	   <?php
 $course_id=$_POST['course_id'];
$sem=$_POST['sem'];
 $stud_id=$_POST['stud_id'];
include('db.php');
 
 $sql="select * from student_master where course_id='$course_id' and semester ='$sem'";
 $res=mysql_query($sql);

 
 $row1=mysql_fetch_array($res);
 ?>
<form name="formID" id="formID" method="post" action="fees_db.php">
  <table width="200" border="0" align="center">
    <tr>
      <td>STUDENT</td>
	  <input name="stud_id" type="hidden" id="date" value="<?php echo $row1['stud_id']; ?>">
      <td><input name="a" type="text" id="a" class="validate[required]" value="<?php echo $row1['fname']; ?> / <?php echo $row1['usn']; ?>"></td>
    </tr>
    <tr>
      <td>FEES</td>
      <td><input name="fee" type="text" id="fee" value="<?php echo $row1['fees']; ?>"></td>
    </tr>
    <tr>
      <td>DATE</td>
      <td><input name="date" type="date" id="date" class="validate[required]"></td>
    </tr>
    <tr>
      <td>AMOUNT</td>
      <td><input name="amount" type="text" id="amount" class="validate[required]"></td>
    </tr>
    <tr>
      <td>MODE_OF_PAYMENT</td>
      <td><input name="mode_of_payment" type="text" id="mode_of_payment" class="validate[required]"></td>
    </tr>
    <tr>
      <td>MODE_NO</td>
      <td><input name="mode_no" type="text" id="mode_no" class="validate[required]"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>
