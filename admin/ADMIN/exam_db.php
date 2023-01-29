
<?php
$exam_name=$_POST['exam_name'];
$min_marks=$_POST['min_marks'];
$max_marks=$_POST['max_marks'];
$exam_date=$_POST['exam_date'];
$course_id=$_POST['course_id'];
$semester=$_POST['semester'];
$desc=$_POST['desc'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into exam values(null,'$exam_name','$min_marks','$max_marks','$exam_date','$course_id','$semester','$desc')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="exam_view.php";
</script>