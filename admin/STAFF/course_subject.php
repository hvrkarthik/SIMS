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
						<h5><i class="black-icons blocks_images"></i> COURSE SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="course_subject_db.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0" align="center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"><select name="course_id" id="course_id">
	   <?php
 
include('db.php'); 
 
 $sql="select * from course";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row1['course_id']; ?>">  <?php echo $row1['name']; ?>  </option>
<?php
}
?>	  
      </select></th>
    </tr>
    <tr>
      <td>SUB_ID</td>
      <td><select name="subject_id" size="1" id="subject_id">
      
	   <?php
 
include('db.php'); 
 
 $sql="select * from subject";
 $res=mysql_query($sql);
 
 while($row2=mysql_fetch_array($res))
 {
 ?>

	  
	  <option value="<?php echo $row2['subject_id']; ?>">  <?php echo $row2['sub_name']; ?> </option>
<?php } ?>	  
	  </select></td>
    </tr>
    <tr>
      <td>SEMESTER</td>
      <td><select name="semester" id="semester">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select></td>
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



