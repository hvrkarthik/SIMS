<?php
$name=$_POST['name'];
$desc=$_POST['desc'];
$fees=$_POST['fees'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into course values(null,'$name','$desc','$fees')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="course_view.php";
</script>