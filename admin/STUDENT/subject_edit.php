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
						<h5><i class="black-icons blocks_images"></i> STUDENT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from subject where subject_id='$id'";
 $res=mysql_query($sql);

$row=mysql_fetch_array($res);
 ?>
<form name="form1" method="post" action="subject_update.php">
  <p>
    <input name="subject_id" type="hidden" id="subject_id" value="<?php echo $row['subject_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <th scope="col">name</th>
      <th scope="col"><input name="sub_name" type="text" id="sub_name" value="<?php echo $row['sub_name']; ?>"></th>
    </tr>
    <tr>
      <td>desc</td>
      <td><input name="desc" type="text" id="desc" value="<?php echo $row['desc']; ?>"></td>
    </tr>
    <tr>
      <td>no_of_hours</td>
      <td><input name="no_of_hours" type="text" id="no_of_hours" value="<?php echo $row['no_of_hours']; ?>"></td>
    </tr>
	<tr>
      <td>credits</td>
      <td><input name="credits" type="text" id="credits" value="<?php echo $row['credits']; ?>"></td>
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

