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
						<h5><i class="black-icons blocks_images"></i> STUDENT SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
 <?php
 $id=$_REQUEST['id'];
 include('db.php'); 
$sql="select * from student_subject where ss_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>
<form name="form1" method="post" action="student_subject_update.php">
  <p>
    <input name="ss_id" type="hidden" id="ss_id" value="<?php echo $row['ss_id']; ?>">
  </p>
  <table width="229" border="1">
 <tr>
      <th width="82" scope="col">stud_id</th>
      <th width="128" scope="col"><select name="stud_id" id="stud_id">
	   <?php
  include('db.php'); 
 $sql1="select * from student_master";
 $res1=mysql_query($sql1);

 
 while($row1=mysql_fetch_array($res1))
 {
 ?>
 <option value="<?php echo $row1['stud_id'];?>" <?php if($row['stud_id']==$row1['stud_id']) { ?> selected <?php } ?>>    <?php echo  $row1['fname'];?> </option>
		<?php
		}
		?>
      </select></th>
    </tr>
   <tr>
      <td>subject_id</td>
      <td><select name="subject_id" id="subject_id">
	  <?php
 
 
 $sql="select * from subject";
 $res=mysql_query($sql);
 
 while($row2=mysql_fetch_array($res))
 {
 ?>
 <option value="<?php echo $row2['subject_id'];?>" <?php if($row['subject_id']==$row2['subject_id']){ ?> selected <?php } ?>>    <?php echo  $row2['name'];?> </option>
		<?php
		}
		?>
 
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

