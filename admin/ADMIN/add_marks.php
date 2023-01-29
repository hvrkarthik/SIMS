<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> EXAM SUBJECT  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="exam_subject.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">

									
<?php
include('db.php');
$es_id=$_REQUEST['es_id'];
//$course=$_POST['course'];
//$sem=$_POST['sem'];

//$exam_id=$_POST['exam_id'];



$sql = "select * from exam_subject es,exam e,subject s,course c where es.exam_id=e.exam_id and es.subject_id=s.subject_id and es.course_id=c.course_id and es.es_id='$es_id'";
//echo $sql;
$res = mysql_query($sql);
$row12= mysql_fetch_array($res);

$subject_id=$row12['subject_id'];
$course_id=$row12['course_id'];
$semester=$row12['semester'];
$exam_id=$row12['exam_id'];
?>
								  
<table width="100%">
	<tr>
		<td>
		<table width="463" align="center">
			<tr bgcolor="#558AC6" height="30">
				<td width="145" align="center"><font color="#FFFFFF"><strong>Exam : <?php echo $row12['exam_name'];?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong>Course : <?php echo $row12['name'];?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong>Semester : <?php echo $row12['semester']; ?></strong></font></td>
				<td width="109" align="center"><font color="#FFFFFF"><strong>Subject : <?php echo $row12['sub_name'];?></strong></font></td>
				
			</tr>
		</table>
		<form action="result3.php" method="post" enctype="multipart/form-data">
		<table width="463" height="37" align="center">
		  <tr><td width="426" bgcolor="#558AC6">
		<table width="104%" height="26" align="center">
			<tr height="25">
				<td width="73" class="hr" align="center"><strong>&nbsp;Si. No.</strong></td>
				<td width="159" class="hr" align="center"><strong>&nbsp;Name</strong></td>
				<td width="103" class="hr" align="center"><strong>&nbsp;Marks</strong></td>
			</tr>
<?php

	$sql = "select * from student_master sm,course c where sm.course_id=c.course_id and sm.semester='$semester' and sm.course_id='$course_id'";
	//echo $sql;
	$res = mysql_query($sql);
	$i=1;
	while($row = mysql_fetch_array($res))
	{
		if($i%2==1)
		{
			echo "<tr height=\"22\" bgcolor=\"#F1F1F9\" ><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\" ><strong>".$row['fname']." ".$row['usn']."</strong></td><td align=\"center\"><input type=\"text\" name=\"".$row['stud_id']."\" id=\"".$row['stud_id']."\" mask=\"numeric\" value=\"".$val."\" //></td></strong></tr>";
		} else
		{
			echo "<tr height=\"22\" bgcolor=\"#B3B3CF\"><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\"><strong>".$row['fname']." ".$row['usn']."</strong></td><td align=\"center\"><input type=\"text\" name=\"".$row['stud_id']."\" id=\"".$row['stud_id']."\" mask=\"numeric\" value=\"".$val."\" //></td></strong></tr>";
		}
		$i++;
	}
?>	


		<input type="hidden" name="semester" id="semester" value="<?php echo $semester?>"  />
		<input type="hidden" name="course_id" id="course_id" value="<?php echo $course_id; ?>"  />
				<input type="hidden" name="subject_id" id="subject_id" value="<?php echo $subject_id; ?>"  />
		<input type="hidden" name="exam" id="exam" value="<?php echo $exam; ?>"  />
		<input type="hidden" name="es_id" id="es_id" value="<?php echo $es_id; ?>"  />
			<tr height="25">
				<td><input type="submit" name="submit" value="submit"  /></td>
				<td align="right" colspan="2">* Checked stands for present</td>
			</tr>
		</table>	
		</td></tr></table>
			
		</form>
		</td>
	</tr>
</table>

										
						</div>
					</div>
				</div>
			</div>
		</div>
		
        
	</div>
</div>


 <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');   ?>

