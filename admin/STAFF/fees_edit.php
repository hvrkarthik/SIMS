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
						<h5><i class="black-icons blocks_images"></i> FEES</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from fees where fees_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>
<form name="form1" method="post" action="fees_update.php">
  <p>
    <input name="fees_id" type="hidden" id="fees_id" value="<?php echo $row['fees_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <th scope="col">stud_id</th>
      <th scope="col"><select name="stud_id" id="stud_id">
	   <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_master";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row1['stud_id']; ?>"  <?php if($row['stud_id']==$row1['stud_id']) { ?> selected <?php } ?>>  <?php echo $row1['fname']; ?>  </option>
<?php
}
?>	  
      </select></th>
    </tr>
    <tr>
      <td>date</td>
      <td><input name="date" type="text" id="date" value="<?php echo $row['date']; ?>"></td>
    </tr>
    <tr>
      <td>amount</td>
      <td><input name="amount" type="text" id="amount" value="<?php echo $row['amount']; ?>"></td>
    </tr>
    <tr>
      <td>mode_of_payment</td>
      <td><input name="mode_of_payment" type="text" id="mode_of_payment" value="<?php echo $row['mode_of_payment']; ?>"></td>
    </tr>
    <tr>
      <td>mode_no</td>
      <td><input name="mode_no" type="text" id="mode_no" value="<?php echo $row['mode_no']; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
 
</form>


						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>
