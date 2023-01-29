<?php
$cs_id=$_POST['cs_id'];
$course_id=$_POST['course_id'];
$subject_id=$_POST['subject_id'];
$semester=$_POST['semester'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="update course_subject set course_id='$course_id', subject_id='$subject_id', semester='$semester' where cs_id='$cs_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="course_subject_view.php";
</script>