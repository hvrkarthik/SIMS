 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from staff_subject where staff_subject_id='$id'";
 $res=mysql_query($sql);

 ?>
<script>
alert('row deleted');
document.location="staff_subject_view.php";
</script>