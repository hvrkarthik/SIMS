 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from exam where exam_id='$id'";
 $res=mysql_query($sql);


 ?>
<script>
alert('row deleted');
document.location="exam_view.php";
</script>