
<?php
$staff_id=$_POST['staff_id'];
$subject_id=$_POST['subject_id'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into staff_subject values(null,'$staff_id','$subject_id')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="staff_subject_view.php";
</script>