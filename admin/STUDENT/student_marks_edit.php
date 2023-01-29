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
						<h5><i class="black-icons blocks_images"></i> STUDENT MARKS</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_marks where sm_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>


<form name="form1" method="post" action="student_marks_update.php">
  <p>
    <input name="sm_id" type="hidden" id="sm_id" value="<?php echo $row['sm_id'];  ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td scope="col"><strong>ES_ID</strong></td>
      <td scope="col"><input name="es_id" type="text" id="es_id" value="<?php echo $row['es_id'];  ?>"></td>
    </tr>
    <tr>
      <td>STUD_ID</td>
      <td><input name="stud_id" type="text" id="stud_id" value="<?php echo $row['stud_id'];  ?>"></td>
    </tr>
    <tr>
      <td height="46">MARKS</td>
      <td><input name="marks" type="text" id="marks" value="<?php echo $row['marks'];  ?>"></td>
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
