<?php
$stud_id=$_POST['stud_id'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$mode_of_payment=$_POST['mode_of_payment'];
$mode_no=$_POST['mode_no'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="insert into fees values(null,'$stud_id','$date','$amount','$mode_of_payment','$mode_no')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="fees_view.php";
</script>