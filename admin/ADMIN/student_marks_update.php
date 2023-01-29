
<?php
$sm_id=$_POST['sm_id'];
$es_id=$_POST['es_id'];
$stud_id=$_POST['stud_id'];
$marks=$_POST['marks'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update student_marks set es_id='$es_id', stud_id='$stud_id', marks='$marks' where sm_id='$sm_id'";

mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="student_marks_view.php";
</script>
