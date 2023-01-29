<?php
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

$target="files/";
$photo_link=$_FILES["photo_link"]["name"];
$target.=basename($_FILES["photo_link"]["name"]);
move_uploaded_file($_FILES["photo_link"]["tmp_name"],$target);

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into student_master values(null,'$fname','$lname','$dob','$gender','$p_address','$phone_no','$c_address','$mobile_no','$usn','$email','$religion','$caste','$category','$gaurdian_name','$gaurdian_contact','$semester','$fees','$joining_date','$photo_link','$course_id','Yes','Active')";
mysql_query($sql);

$id=mysql_insert_id();

 $sql1="insert into user values('$usn','$mobile_no','student','My registered Email Id','$email','Active')";
mysql_query($sql1);

  $sql="select * from course_subject where course_id='$course_id' and semester='$semester'";
  $res=mysql_query($sql);
while($row2=mysql_fetch_array($res))
  {
  
  $sub_id=$row2['subject_id'];
  
  $sql3="insert into student_subject values(null,'$id','$sub_id')";
  mysql_query($sql3); 
  
  }


?>
<script>
alert('values are inserted');
document.location="student_master_view.php";
</script>