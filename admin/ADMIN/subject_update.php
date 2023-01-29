<?php
$subject_id=$_POST['subject_id'];
$sub_name=$_POST['sub_name'];
$desc=$_POST['desc'];
$no_of_hours=$_POST['no_of_hours'];
$credits=$_POST['credits'];


$con=mysql_connect('localhost','root','');
mysql_select_db('sims',$con);
$sql="update subject set sub_name='$sub_name', `desc`='$desc', no_of_hours='$no_of_hours', credits='$credits' where subject_id='$subject_id'";
mysql_query($sql);
?>
<script>
alert('values are updated');
document.location="subject_view.php";
</script>