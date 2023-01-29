<?php
$course_id=$_POST['course_id'];
$subject_id=$_POST['subject_id'];
$semester=$_POST['semester'];

include('db.php');
 $sql="select * from course_subject";
 $res=mysql_query($sql);
$row=mysql_fetch_array($res);

$course_id1=$row['course_id'];
$subject_id1=$row['subject_id'];
$semester1=$row['semester'];


if($course_id==$course_id1 && $subject_id==$subject_id1)
{
?>
<script>
alert('Already values inserted');
document.location="course_view.php";
</script>
<?php
}
else
{
 $sql="insert into course_subject values(null,'$course_id','$subject_id','$semester')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="course_view.php";
</script>

<?php
}
?>