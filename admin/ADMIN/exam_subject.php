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
						<h5><i class="black-icons blocks_images"></i> EXAM SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); 
$id=$_REQUEST['id'];
?>
<form name="formID" id="formID" method="post" action="exam_subject1.php">
 
  <table width="200" border="0" align="center">
    <tr>
      <th scope="col">EXAM_ID</th>
	        <th scope="col"><select name="exam_id" id="exam_id">

	   <?php
 
include('db.php'); 
 $sql="select * from exam where exam_id='$id'";
 $res=mysql_query($sql); 
 while($row1=mysql_fetch_array($res))
 {
 ?>

	  <option value="<?php echo $row1['exam_id'];?>">    <?php echo  $row1['exam_name'];?>   </option>
	  
	  <?php
	  }
	  ?>
      </select></th>
    </tr>
    <tr>
      <td>COURSE_ID</td>
	        <td><select name="course_id" id="course_id">
              <?php
 
 $sql="select * from course";
 $res=mysql_query($sql); 
 while($row3=mysql_fetch_array($res))
 {
 ?>
              <option value="<?php echo $row3['course_id'];?>"> <?php echo  $row3['name'];?> </option>
              <?php
	  }
	  ?>
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
