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

									
<?php
include('db.php');
$course=$_POST['course'];
$sem=$_POST['sem'];
$subject_id=$_POST['subject_id'];
$att_date=$_POST['att_date'];
$timing=$_POST['timing'];

$sql = "select s_name from sub where subject_id = '$subject_id'";
//echo $sql;
$res = mysql_query($sql);
$row1 = mysql_fetch_array($res);

?>
								  
<table width="100%">
	<tr>
		<td>
		<table width="463" align="center">
			<tr bgcolor="#558AC6" height="30">
				<td width="145" align="center"><font color="#FFFFFF"><strong><?php echo $row1['s_name'];?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong><?php echo $course;?></strong></font></td>
				<td width="93" align="center"><font color="#FFFFFF"><strong><?php echo $sem;?></strong></font></td>
				<td width="109" align="center"><font color="#FFFFFF"><strong><?php echo $att_date;?></strong></font></td>
				<td width="96" align="center"><font color="#FFFFFF"><strong><?php echo $timing;?></strong></font></td>
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

	$sql = "select st.student_id, st.name, st.col_reg from streg st,stusub ss where st.course='$course' and st.sem ='$sem' and st.student_id=ss.student_id and ss.subject_id='$subject_id'";
	//echo $sql;
	$res = mysql_query($sql);
	$i=1;
	while($row = mysql_fetch_array($res))
	{
		if($i%2==1)
		{
			echo "<tr height=\"22\" bgcolor=\"#F1F1F9\" ><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\" ><strong>".$row['name']." ".$row['col_reg']."</strong></td><td align=\"center\"><input type=\"checkbox\" name=\"".$row['student_id']."\" id=\"".$row['student_id']."\" checked=\"checked\" style=\"opacity:2\" //></td></strong></tr>";
		} else
		{
			echo "<tr height=\"22\" bgcolor=\"#B3B3CF\"><strong><td align=\"center\"><strong>$i</strong></td><td align=\"center\"><strong>".$row['name']." ".$row['col_reg']."</strong></td><td align=\"center\"><input type=\"checkbox\" name=\"".$row['student_id']."\" id=\"".$row['student_id']."\" value=\"".$row['student_id']."\" checked=\"checked\"  style=\"opacity:2\"//></td></strong></tr>";
		}
		$i++;
	}
?>	

<input type="hidden" name="course" id="course" value="<?php echo $course?>"  />
		<input type="hidden" name="sem" id="sem" value="<?php echo $sem?>"  />
		<input type="hidden" name="subject" id="subject" value="<?php echo $subject_id; ?>"  />
		<input type="hidden" name="date" id="date" value="<?php echo $att_date; ?>"  />
		<input type="hidden" name="timefield" id="timefield" value="<?php echo $timing;?>"  />
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

