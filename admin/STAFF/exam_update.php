
<?php
$exam_id=$_POST['exam_id'];
$exam_name=$_POST['exam_name'];
$min_marks=$_POST['min_marks'];
$max_marks=$_POST['max_marks'];
$exam_date=$_POST['exam_date'];
$course_id=$_POST['course_id'];
$semester=$_POST['semester'];
$desc=$_POST['desc'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update exam set exam_name='$exam_name', min_marks='$min_marks', max_marks='$max_marks', exam_date='$exam_date',course_id='$course_id',semester='$semester', `desc`='$desc' where exam_id='$exam_id'";

mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="exam_view.php";
</script>