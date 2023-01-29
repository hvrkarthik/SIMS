<?php
$name=$_POST['sub_name'];
$desc=$_POST['desc'];
$no_of_hours=$_POST['no_of_hours'];
$credits=$_POST['credits'];


$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="insert into subject values(null,'$name','$desc','$no_of_hours','$credits')";
mysql_query($sql);
?>
<script>
alert('values are inserted');
document.location="subject_view.php";
</script>