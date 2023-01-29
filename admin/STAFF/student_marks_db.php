
<?php
$es_id=$_POST['es_id'];
$stud_id=$_POST['stud_id'];
$marks=$_POST['marks'];


$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into student_marks values(null,'$es_id','$stud_id','$marks')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="student_marks_view.php";
</script>