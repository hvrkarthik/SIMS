


<?php

	include('db.php');
	$datee=$_POST['date'];
	$course_id=$_POST['course_id'];
$sem=$_POST['sem'];
	$cs_id=$_POST['cs_id'];
	$subject_id=$_POST['subject_id'];
 $sql = "select * from student_master st,student_subject ss where st.course_id='$course_id' and st.semester ='$sem' and st.stud_id=ss.stud_id and ss.subject_id='$subject_id'";
	//$sql = "select stud_id from streg where course=". $_POST['course']." and sem = ".$_POST['sem']." and stud_id in(select stud_id from stsub where subject_id = ".$_POST['subject']." )";
	echo $sql;
	$res = mysql_query($sql);
	while($row11 = mysql_fetch_array($res))
//	echo $stud_id=$row11['stud_id'];
	{
	
		$status = 'A';
		if(isset($_POST[$row11['stud_id']]))
		{
			$status = 'P';
		}
		else
		{
//		  $msg="Your child is absent on:" .$datee." for :".$subject_id;
		//   $mobile_no=$row['mobile_no'];
			
	 // $data=urlencode($msg);
	  

//$sms_url="http://trans.vwgsms.com/sendSMS?username=bestpuc&message=$data&sendername=BESTPU&smstype=TRANS&numbers=9743275948&apikey=c7408e30-2eff-498f-bc47-ced0160b471f";
 // $content = file_get_contents($sms_url);
		}		
		
$sql = "insert into attendance values(NULL,".$row11['stud_id'].",".$_POST['cs_id'].",'".$_POST['date']."', '".$_POST['time']."','".$status."')";
		$res1 = mysql_query($sql);
	}	
	$sql = "select sub_name from subject where subject_id = ".$_POST['subject_id'];
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);

?>
	<script>
		alert('Successfully Placed attendance for <?php echo $row['sub_name'];?> on date <?php echo $_POST['date'];?> at <?php echo $_POST['time']?>');
		document.location = "attendance.php";
	</script>

<?php
	include('db.php');
	
	//Fetching name of the subject
	$sql = "select sub_name from subject where subject_id = ".$_POST['subject_id'];
	$res = mysql_query($sql);
	$row1 = mysql_fetch_array($res);

	//Quering for today's attendance... If already placed inform whether you want to put it again
	$sql = "select * from attendance a,course_subject cs where a.cs_id=cs.cs_id and a.date = '".$_POST['date']."' and cs.course_id=". $_POST['course_id']." and cs.semester = ".$_POST['sem']." and a.subject_id = ".$_POST['subject_id'];
	//echo $sql;
	$res = mysql_query($sql);
	if(mysql_num_rows($res)>0)
	{
		?>
		<script>
			if(!(confirm('Already found attendance for subject <?php echo $row1['sub_name'];?>  on date <?php echo $_POST['date']; ?> \n\r Click ok to continue with attendance \n\r Click on cancel to go back' )))
			{
				document.location = "attendance.php";
			}
		</script>
		<?php
	}
?>


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

