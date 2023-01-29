<?php
$stud_id=$_POST['stud_id'];
$sub_id=$_POST['sub_id'];
$date=$_POST['date'];
$time=$_POST['time'];
$status=$_POST['status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into attendance values(null,'$stud_id','$sub_id','$date','$time','$status')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="attendance_view.php";
</script>