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
						
												<h5><a href=""><i class="black-icons blocks_images"></i>VIEW ATTENDANCE</a></h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">

<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="view_att1.php">
  <p>&nbsp;</p>
  								<table  class="table table-striped table-bordered table-hover">
									<thead>

      <tr>
      <th>Course</th>
      <th><select name="course_id" id="course_id">
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
    
      <th>Semester</th>
      <th><select name="sem" id="sem">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
		<option>7</option>
        <option>8</option>
      </select></th>
    </tr>
	    <tr>
      <th colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></th>
    </tr>
	</thead>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>
