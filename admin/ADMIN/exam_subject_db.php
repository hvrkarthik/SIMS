<?php
$exam_id=$_POST['exam_id'];
$subject_id=$_POST['subject_id'];
$course_id=$_POST['course_id'];
$date=$_POST['date'];
$semester=$_POST['semester'];

include('db.php');

 
$sql="insert into exam_subject values(null,'$exam_id','$subject_id','$course_id','$semester','$date')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="exam_view.php";
</script>