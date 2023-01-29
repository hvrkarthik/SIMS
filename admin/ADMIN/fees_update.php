<?php
$fees_id=$_POST['fees_id'];
$stud_id=$_POST['stud_id'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$mode_of_payment=$_POST['mode_of_payment'];
$mode_no=$_POST['mode_no'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="update fees set stud_id='$stud_id', date='$date', amount='$amount', mode_of_payment='$mode_of_payment',
      mode_no='$mode_no' where fees_id='$fees_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="fees_view.php";
</script>