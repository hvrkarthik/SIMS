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
						<h5><i class="black-icons blocks_images"></i> BILL</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from course where course_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>


<form name="form1" method="post" action="course_update.php">
  <p>
    <input name="course_id" type="hidden" id="course_id" value="<?php echo $row['course_id'];  ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td scope="col"><strong>name</strong></td>
      <td scope="col"><input name="name" type="text" id="name" value="<?php echo $row['name'];  ?>"></td>
    </tr>
    <tr>
      <td>desc</td>
     <td><input name="desc" type="text" id="desc" value="<?php echo $row['desc'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">fees</td>
      <td><input name="fees" type="text" id="fees" value="<?php echo $row['fees'];  ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>








