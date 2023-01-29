<?php
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$hint_q=$_POST['hint_q'];
$hint_a=$_POST['hint_a'];

$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
 $sql="insert into login values('$username','$password','$usertype','$hint_q','$hint_a')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="login_view.php";
</script>