<?php
$course_id=$_POST['course_id'];
$name=$_POST['name'];
$desc=$_POST['desc'];
$fees=$_POST['fees'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update course set name='$name', `desc`='$desc', fees='$fees' where course_id='$course_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="course_view.php";
</script>