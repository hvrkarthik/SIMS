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
						<h5><i class="black-icons blocks_images"></i> ATTENDANCE</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from attendance where att_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>


<form name="form1" method="post" action="attendance_update.php">
  <p>
    <input name="att_id" type="hidden" id="att_id" value="<?php echo $row['att_id'];  ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td scope="col"><strong>stud_id</strong></td>
      <td scope="col"><input name="stud_id" type="text" id="stud_id" value="<?php echo $row['stud_id'];  ?>"></td>
    </tr>
    <tr>
      <td>sub_id</td>
      <td><input name="sub_id" type="text" id="sub_id" value="<?php echo $row['sub_id'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">date</td>
      <td><input name="date" type="date" id="date" value="<?php echo $row['date'];  ?>"></td>
    </tr>
	
	<tr>
      <td height="46">time</td>
      <td><input name="time" type="text" id="time" value="<?php echo $row['time'];  ?>"></td>
    </tr>

<tr>
      <td height="46">date</td>
      <td><input name="status" type="status" id="status" value="<?php echo $row['status'];  ?>"></td>
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
