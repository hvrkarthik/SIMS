 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from student_master where stud_id='$id'";
 $res=mysql_query($sql);


 ?>
<script>
alert('row deleted');
document.location="student_master_view.php";
</script>