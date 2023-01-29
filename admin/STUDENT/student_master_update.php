<?php
$stud_id=$_POST['stud_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$p_address=$_POST['p_address'];
$phone_no=$_POST['phone_no'];
$c_address=$_POST['c_address'];
$mobile_no=$_POST['mobile_no'];
$usn=$_POST['usn'];
$email=$_POST['email'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$category=$_POST['category'];
$gaurdian_name=$_POST['gaurdian_name'];
$gaurdian_contact=$_POST['gaurdian_contact'];
$semester=$_POST['semester'];
$fees=$_POST['fees'];
$joining_date=$_POST['joining_date'];
$photo_link=$_POST['photo_link'];
$course_id=$_POST['course_id'];
$library=$_POST['library'];
$status=$_POST['status'];




$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update student_master set fname='$fname', lname='$lname', dob='$dob', gender='$gender', p_address='$p_address', phone_no='$phone_no', c_address='$c_address', mobile_no='$mobile_no', usn='$usn', email='$email', religion='$religion', caste='$caste', category='$category', gaurdian_name='$gaurdian_name', gaurdian_contact='$gaurdian_contact', semester='$semester', fees='$fees', joining_date='$joining_date',photo_link='$photo_link', course_id='$course_id', library='$library', status='$status' where stud_id='$stud_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="student_master_view.php";
</script>