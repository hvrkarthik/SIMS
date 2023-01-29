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
						<h5><i class="black-icons blocks_images"></i> EXAM</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">

 <?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from exam where exam_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>

<form name="form1" method="post" action="exam_update.php">
  <p>
    <input name="exam_id" type="hidden" id="exam_id" value=" <?php echo $row['exam_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td>exam_name</td>
      <td><input name="exam_name" type="text" id="exam_name" value=" <?php echo $row['exam_name']; ?>"></td>
    </tr>
    <tr>
      <td><p>min_marks</p>
      </td>
      <td><input name="min_marks" type="text" id="min_marks" value=" <?php echo $row['min_marks']; ?>"></td>
    </tr>
    <tr>
      <td>max_marks</td>
      <td><input name="max_marks" type="text" id="max_marks" value=" <?php echo $row['max_marks']; ?>"></td>
    </tr>
    <tr>
      <td>exam_date</td>
      <td><input name="exam_date" type="text" id="exam_date" value=" <?php echo $row['exam_date']; ?>"></td>
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
      <td>semester</td>
      <td><input name="semester" type="text" id="semester" value=" <?php echo $row['semester']; ?>"></td>
    </tr>
    <tr>
      <td>desc</td>
      <td><input name="desc" type="text" id="desc" value=" <?php echo $row['desc']; ?>"></td>
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


