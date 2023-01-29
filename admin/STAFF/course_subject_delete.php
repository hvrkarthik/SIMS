 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from course_subject where cs_id='$id'";
 $res=mysql_query($sql);


 ?>
<script>
alert('row deleted');
document.location="course_subject_view.php";
</script>