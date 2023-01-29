<?php
$stud_id=$_POST['stud_id'];
$subject_id=$_POST['subject_id'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="insert into student_subject values(null,'$stud_id','$subject_id')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="student_subject_view.php";
</script>