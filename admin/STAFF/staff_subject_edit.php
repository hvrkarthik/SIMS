<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<body>



<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li><a href="#">Library</a><span class="divider">&raquo;</span></li>
			<li class="active">Data</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5><i class="black-icons blocks_images"></i> STAFF SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">

 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from staff_subject where staff_subject_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>

<form name="form1" method="post" action="staff_subject_update.php">
  <p>
    <input name="staff_subject_id" type="hidden" id="staff_subject_id" value=" <?php echo $row['staff_subject_id']; ?>">
  </p>
  <table width="236" border="1">
    <tr>
      <th scope="col">stff_id</th>
      <th scope="col"><select name="staff_id" id="staff_id">
	   <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from staff";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row1['staff_id']; ?>"  <?php if($row['staff_id']==$row1['staff_id']) { ?> selected <?php } ?>>  <?php echo $row1['fname']; ?>  </option>
<?php
}
?>	  
      </select></th>
    </tr>
    <tr>
      <th scope="col">subject_id</th>
      <th scope="col"><select name="subject_id" id="subject_id">
	   <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from subject";
 $res=mysql_query($sql);

 
 while($row2=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row2['subject_id']; ?>"  <?php if($row['subject_id']==$row2['subject_id']) { ?> selected <?php } ?>>  <?php echo $row1['name']; ?>  </option>
<?php
}
?>	  
      </select></th>
    </tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>

  </table>

</form>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>



