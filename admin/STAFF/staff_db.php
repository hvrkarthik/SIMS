
<?php
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

$target="files/";
$photo_link=$_FILES["photo_link"]["name"];
$target.=basename($_FILES["photo_link"]["name"]);
move_uploaded_file($_FILES["photo_link"]["tmp_name"],$target);

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into staff values(null,'$fname','$lname','$dob','$gender','$p_address','$mobile_no','$email','$quali','$course_id','$joining_date','$photo_link')";
mysql_query($sql);

 $sql1="insert into user values('$email','$mobile_no','staff','My Date of Birth','$dob','active')";
mysql_query($sql1);
?>
<script>
alert('values are inserted');
document.location="staff_view.php";
</script>