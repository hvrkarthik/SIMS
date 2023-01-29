
<?php
$staff_subject_id=$_POST['staff_subject_id'];
$staff_id=$_POST['staff_id'];
$subject_id=$_POST['subject_id'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="update staff_subject set staff_id='$staff_id', subject_id='$subject_id' where staff_subject_id='$staff_subject_id'";
 mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="staff_subject_view.php";
</script>