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
						<h5><i class="black-icons blocks_images"></i> STAFF</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">

 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from staff where staff_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>


<form name="form1" method="post" action="staff_update.php">
  <p>
    <input name="staff_id" type="hidden" id="staff_id" value="<?php echo $row['staff_id'];  ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td scope="col"><strong>fname</strong></td>
      <td scope="col"><input name="fname" type="text" id="fname" value="<?php echo $row['fname'];  ?>"></td>
    </tr>
    <tr>
      <td>lname</td>
      <td><input name="lname" type="text" id="lname" value="<?php echo $row['lname'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">dob</td>
      <td><input name="dob" type="text" id="dob" value="<?php echo $row['dob'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">gender</td>
      <td><input name="gender" type="text" id="gender" value="<?php echo $row['gender'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">p_address</td>
      <td><input name="p_address" type="text" id="p_address" value="<?php echo $row['p_address'];  ?>"></td>
    </tr>
	<tr>
      <td height="46">mobile_no</td>
      <td><input name="mobile_no" type="text" id="mobile_no" value="<?php echo $row['mobile_no'];  ?>"></td>
    </tr>
	<tr>
      <td height="46">email</td>
      <td><input name="email" type="text" id="email" value="<?php echo $row['email'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">quali</td>
      <td><input name="quali" type="text" id="quali" value="<?php echo $row['quali'];  ?>"></td>
    </tr>
    <tr>
      <th scope="col">course_id</th>
      <th scope="col"><select name="course_id" id="course_id">
	   <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from course";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row1['course_id']; ?>"  <?php if($row['course_id']==$row1['course_id']) { ?> selected <?php } ?>>  <?php echo $row1['name']; ?>  </option>
<?php
}
?>	  
      </select></th>
    </tr>
    <tr>
      <td height="46">joining_date</td>
      <td><input name="joining_date" type="text" id="joining_date" value="<?php echo $row['joining_date'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">photo_link</td>
      <td><input name="photo_link" type="text" id="photo_link" value="<?php echo $row['photo_link'];  ?>"></td>
    </tr>
    <tr>
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


