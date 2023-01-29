<?php
$staff_id=$_POST['staff_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$p_address=$_POST['p_address'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$quali=$_POST['quali'];
$course_id=$_POST['course_id'];
$joining_date=$_POST['joining_date'];
$photo_link=$_POST['photo_link'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update staff set fname='$fname', lname='$lname', dob='$dob', gender='$gender', p_address='$p_address', mobile_no='$mobile_no', email='$email', quali='$quali', course_id='$course_id', joining_date='$joining_date', photo_link='$photo_link' where staff_id='$staff_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="staff_view.php";
</script>