 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="delete from fees where fees_id='$id'";
 $res=mysql_query($sql);


 ?>
<script>
alert('row deleted');
document.location="fees_view.php";
</script>