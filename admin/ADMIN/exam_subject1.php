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
						<h5><i class="black-icons blocks_images"></i> EXAM SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); 
$exam_id=$_POST['exam_id'];
$course_id=$_POST['course_id'];
$semester=$_POST['semester'];
?>
<form name="formID" id="formID" method="post" action="exam_subject_db.php">
 <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
 <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
 <input type="hidden" name="semester" value="<?php echo $semester; ?>">
  <table width="200" border="0" align="center">
    <tr>
      <td>SUBJECT_ID</td>
	        <td><select name="subject_id" id="subject_id">

	  <?php
 
 include('db.php'); 
 $sql="select * from course_subject cs,course c,subject s where cs.course_id=c.course_id and cs.subject_id=s.subject_id and c.course_id='$course_id' and cs.semester='$semester'";
 $res=mysql_query($sql); 
 while($row2=mysql_fetch_array($res))
 {
 ?>

	  	  <option value="<?php echo $row2['subject_id'];?>">    <?php echo  $row2['sub_name'];?>   </option>
	  
	  <?php
	  }
	  ?>

      </select></td>
    </tr>
    <tr>
      <td>Date</td>
	        <td><input type="date" name="date" id="date" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>
