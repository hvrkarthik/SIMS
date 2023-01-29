


<?php

	include('db.php');
	$es_id=$_POST['es_id'];
	$exam_id=$_POST['exam_id'];
	$course_id=$_POST['course_id'];
$semester=$_POST['semester'];
	$subject_id=$_POST['subject_id'];
 $sql = "select * from student_master sm,course c where sm.course_id=c.course_id and sm.semester='$semester' and sm.course_id='$course_id'";
	//$sql = "select stud_id from streg where course=". $_POST['course']." and sem = ".$_POST['sem']." and stud_id in(select stud_id from stsub where subject_id = ".$_POST['subject']." )";
	echo $sql;
	$res = mysql_query($sql);
	while($row11 = mysql_fetch_array($res))
//	echo $stud_id=$row11['stud_id'];
	{
	
		$marks = '-1';
		if(isset($_POST[$row11['stud_id']]))
		{
			$marks = $_POST[$row11['stud_id']];
		}
		else
		{
		  //$msg="Your child is absent on:" .$datee." for :".$subj;
		//   $mobile_no=$row['mobile_no'];
			
	//  $data=urlencode($msg);
	  

//$sms_url="http://trans.vwgsms.com/sendSMS?username=bestpuc&message=$data&sendername=BESTPU&smstype=TRANS&numbers=9743275948&apikey=c7408e30-2eff-498f-bc47-ced0160b471f";
 // $content = file_get_contents($sms_url);
		}		
		
$sql = "insert into student_marks values(NULL,'".$_POST['es_id']."',".$row11['stud_id'].",'".$marks."')";
		$res1 = mysql_query($sql);
	}	

?>
	<script>
		alert('Successfully Placed marks');
		document.location = "exam_view.php";
	</script>


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

