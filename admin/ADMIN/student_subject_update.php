<?php
$ss_id=$_POST['ss_id'];
$stud_id=$_POST['stud_id'];
$subject_id=$_POST['subject_id'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="update student_subject set stud_id='$stud_id', subject_id='$subject_id' where ss_id='$ss_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="student_subject_view.php";
</script>