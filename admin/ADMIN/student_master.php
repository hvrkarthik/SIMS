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
						<h5><i class="black-icons blocks_images"></i> STUDENT MASTER</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="student_master_db.php" enctype="multipart/form-data">
  <table width="200" border="0" align="center">
    <tr>
      <td>FNAME</td>
      <td><input name="fname" type="text" id="fname" class="validate[required]"></td>

      <td>LNAME</td>
      <td><input name="lname" type="text" id="lname" class="validate[required]"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="dob" type="text" id="dob" class="validate[required]"></td>

      <td>GENDER</td>
      <td><input name="gender" type="text" id="gender" class="validate[required]"></td>
    </tr>
    <tr>
      <td>P_ADDRESS</td>
      <td colspan="3"><input name="p_address" type="text" id="p_address"class="validate[required]"></td>
    </tr>
    <tr>
      <td>PHONE_NO</td>
      <td><input name="phone_no" type="text" id="phone_no" class="validate[required],custom[onlyNumber]"></td>
      <td>MOBILE_NO</td>
      <td><input name="mobile_no" type="text" id="mobile_no" class="validate[required],custom[onlyNumber]"></td>
    </tr>

    <tr>
      <td>C_ADDRESS</td>
      <td colspan="3"><input name="c_address" type="text" id="c_address" class="validate[required]"></td>
    </tr>
    <tr>
      <td>USN</td>
      <td><input name="usn" type="text" id="usn" class="validate[required]"></td>

      <td>EMAIL</td>
      <td><input name="email" type="text" id="email" class="validate[required],custom[email]"></td>
    </tr>
    <tr>
      <td>RELIGION</td>
      <td><input name="religion" type="text" id="religion" class="validate[required]"></td>

      <td>CASTE</td>
      <td><input name="caste" type="text" id="caste" class="validate[required]"></td>
    </tr>
    <tr>
      <td>CATEGORY</td>
      <td colspan="3"><input name="category" type="text" id="category" class="validate[required]"></td>
    </tr>
    <tr>
      <td>GAURDIAN_NAME</td>
      <td><input name="gaurdian_name" type="text" id="gaurdian_name" class="validate[required]"></td>

      <td>GAURDIAN_CONTACT</td>
      <td><input name="gaurdian_contact" type="text" id="gaurdian_contact" class="validate[required]"></td>
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
      <td>FEES</td>
      <td><input name="fees" type="text" id="fees" class="validate[required]"></td>
    
      <td>JOINING_DATE</td>
      <td><input name="joining_date" type="text" id="joining_date" class="validate[required]"></td>
    </tr>
    <tr>
      <td>PHOTO_LINK</td>
      <td><input name="photo_link" type="file" id="photo_link" class="validate[required]"></td>
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

