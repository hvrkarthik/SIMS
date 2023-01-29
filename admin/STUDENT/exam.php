<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<body>



<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Home</a></a><span class="divider">&raquo;</span></li>
			<li><a href="#">Library</a><span class="divider">&raquo;</span></li>
			<li class="active">Data</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5><i class="black-icons blocks_images"></i> EXAM</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="exam_db.php">
 <td>&nbsp;</td>
 <td>&nbsp;</td>
  <table width="200" border="0" align="center">
    <tr>
      <td>EXAM_NAME</td>
      <td><input name="exam_name" type="text" id="exam_name" class="validate[required]"></td>
    </tr>
    <tr>
      <td><p>MIN_MARKS</p>
      </td>
      <td><input name="min_marks" type="text" id="min_marks" class="validate[required]"></td>
    </tr>
    <tr>
      <td>MAX_MARKS</td>
      <td><input name="max_marks" type="text" id="max_marks" class="validate[required]"></td>
    </tr>
    <tr>
      <td>EXAM_DATE</td>
      <td><input name="exam_date" type="text" id="exam_date" class="validate[required]"></td>
    </tr>
    <tr>
      <td>COURSE_ID</td>
      <td><select name="course_id" id="course_id">
	 <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from course";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row1['course_id'];?> ">    <?php echo  $row1['name'];?> </option>
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
      <td>DESC</td>
      <td><input name="desc" type="text" id="desc" class="validate[required]"></td>
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



