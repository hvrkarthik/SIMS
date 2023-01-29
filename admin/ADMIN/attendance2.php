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
						<h5><i class="black-icons blocks_images"></i> ATTENDANCE</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php
include('db.php');
$course_id=$_POST['course_id'];
$sem=$_POST['sem'];
$cs_id=$_POST['cs_id'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql = "select * from course_subject cs, subject s,course c where cs.course_id=c.course_id and cs.subject_id=s.subject_id and cs.cs_id='$cs_id'";
//echo $sql;
$res = mysql_query($sql);
$row1 = mysql_fetch_array($res);
$subject_id=$row1['subject_id'];
?>
								  
<table width="100%">
	<tr>
		<td>
		<table width="463" align="center">
			<tr bgcolor="#558AC6" height="30">
				<td width="145" align="center"><font color="#FFFFFF"><strong><?php echo $row1['sub_name'];?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong><?php echo $row1['name'];?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong><?php echo $row1['semester'];?></strong></font></td>
				<td width="109" align="center"><font color="#FFFFFF"><strong><?php echo $date;?></strong></font></td>
				<td width="96" align="center"><font color="#FFFFFF"><strong><?php echo $time;?></strong></font></td>
			</tr>
		</table>
		<form action="attend3.php" method="post" enctype="multipart/form-data">
		<table width="463" height="37" align="center">
		  <tr><td width="426" bgcolor="#558AC6">
		<table width="104%" height="26" align="center">
			<tr height="25">
				<td width="73" class="hr" align="center"><strong>&nbsp;Si. No.</strong></td>
				<td width="159" class="hr" align="center"><strong>&nbsp;Name</strong></td>
				<td width="103" class="hr" align="center"><strong>&nbsp;Attendance</strong></td>
			</tr>
<?php

    $sql = "select * from student_master st,student_subject ss where st.course_id='$course_id' and st.semester ='$sem' and st.stud_id=ss.stud_id and ss.subject_id='$subject_id'";
	//echo $sql;
	$res = mysql_query($sql);
	$i=1;
	while($row = mysql_fetch_array($res))
	{
		if($i%2==1)
		{
			echo "<tr height=\"22\" bgcolor=\"#F1F1F9\" ><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\" ><strong>".$row['fname']." ".$row['usn']."</strong></td><td align=\"center\"><input type=\"checkbox\" name=\"".$row['stud_id']."\" id=\"".$row['stud_id']."\" checked=\"checked\" style=\"opacity:2\" //></td></strong></tr>";
		} else
		{
			echo "<tr height=\"22\" bgcolor=\"#B3B3CF\"><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\"><strong>".$row['fname']." ".$row['usn']."</strong></td><td align=\"center\"><input type=\"checkbox\" name=\"".$row['stud_id']."\" id=\"".$row['stud_id']."\" value=\"".$row['stud_id']."\" checked=\"checked\"  style=\"opacity:2\"//></td></strong></tr>";
		}
		$i++;
	}
?>	

<input type="hidden" name="course_id" id="course_id" value="<?php echo $course_id?>"  />
		<input type="hidden" name="sem" id="sem" value="<?php echo $sem?>"  />
		<input type="hidden" name="cs_id" id="cs_id" value="<?php echo $cs_id; ?>"  />
		<input type="hidden" name="subject_id" id="subject_id" value="<?php echo $subject_id; ?>"  />
		<input type="hidden" name="date" id="date" value="<?php echo $date; ?>"  />
		<input type="hidden" name="time" id="time" value="<?php echo $time;?>"  />
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

<?php include('footer.php');   ?>
