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
<?php include('val.php');
$course_id=$_POST['course_id'];
$sem=$_POST['sem'];
?>
<form name="formID" id="formID" method="post" action="fees2.php">
  <p>&nbsp;</p>
  <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
  <input type="hidden" name="sem" value="<?php echo $sem; ?>">  
  								<table  class="table table-striped table-bordered table-hover">
									<thead>

    <tr>
      <th>Student</th>
      <th><select name="stud_id" id="stud_id">
	  <?php
	 include('db.php');
	 $sql="select * from student_master where course_id='$course_id' and semester ='$sem'";
	 $res=mysql_query($sql);
	 while($row1=mysql_fetch_array($res))
	 {
	 ?>
	 
	 <option value="<?php echo $row1['stud_id']; ?>" selected> <?php echo $row1['fname'];  ?> / <?php echo $row1['usn'];  ?> </option>
	<?php
	}
	?>	
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
			</div>
		</div>

<?php include('footer.php');   ?>
