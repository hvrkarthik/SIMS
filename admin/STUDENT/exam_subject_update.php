<?php
$es_id=$_POST['es_id'];
$exam_id=$_POST['exam_id'];
$subject_id=$_POST['subject_id'];
$course_id=$_POST['course_id'];
$semester=$_POST['semester'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update exam_subject set exam_id='$exam_id', subject_id='$subject_id', course_id='$course_id', semester='$semester' where es_id='$es_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="exam_subject_view.php";
</script>