<?php
$att_id=$_POST['att_id'];
$stud_id=$_POST['stud_id'];
$sub_id=$_POST['sub_id'];
$date=$_POST['date'];
$time=$_POST['time'];
$status=$_POST['status'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update attendance set stud_id='$stud_id', sub_id='$sub_id', date='$date', time='$time', status='$status' where att_id='$att_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="attendance_view.php";
</script>