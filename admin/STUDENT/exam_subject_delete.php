 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from exam_subject where es_id='$id'";
 $res=mysql_query($sql);


 ?>
<script>
alert('row deleted');
document.location="exam_view.php";
</script>