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
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="student_subject_db.php">
  
  <table width="226" border="0" align="center" >
    <tr>
      <td>STUD_ID</td>
      <td><select name="stud_id" id="stud_id">
	   <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_master";
 $res=mysql_query($sql);

 
 while($row1=mysql_fetch_array($res))
 {
 ?>
 <option value="<?php echo $row1['stud_id'];?>">    <?php echo  $row1['fname'];?> </option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>SUBJECT_ID</td>
      <td><select name="subject_id" id="subject_id">
	  <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from subject";
 $res=mysql_query($sql);
 
 while($row2=mysql_fetch_array($res))
 {
 ?>
 <option value="<?php echo $row2['subject_id'];?>">    <?php echo  $row2['sub_name'];?> </option>
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




   
