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
<?php
 $id=$_REQUEST['id'];
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_master where stud_id='$id'";
 $res=mysql_query($sql);

 
$row=mysql_fetch_array($res);
 ?>
<form name="form1" method="post" action="student_master_update.php">
  <p>
    <input name="stud_id" type="hidden" id="stud_id" value="<?php echo $row['stud_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <th scope="col">fname</th>
      <th scope="col"><input name="fname" type="text" id="fname" value="<?php echo $row['fname']; ?>"></th>
    </tr>
    <tr>
      <td>lname</td>
      <td><input name="lname" type="text" id="lname" value="<?php echo $row['lname']; ?>"></td>
    </tr>
    <tr>
      <td>dob</td>
      <td><input name="dob" type="text" id="dob" value="<?php echo $row['dob']; ?>"></td>
    </tr>
    <tr>
      <td>gender</td>
      <td><input name="gender" type="text" id="gender" value="<?php echo $row['gender']; ?>"></td>
    </tr>
    <tr>
      <td>p_address</td>
      <td><input name="p_address" type="text" id="p_address" value="<?php echo $row['p_address']; ?>"></td>
    </tr>
    <tr>
      <td>phone_no</td>
      <td><input name="phone_no" type="text" id="phone_no" value="<?php echo $row['phone_no']; ?>"></td>
    </tr>
    <tr>
      <td>c_address</td>
      <td><input name="c_address" type="text" id="c_address" value="<?php echo $row['c_address']; ?>"></td>
    </tr>
    <tr>
      <td>mobile_no</td>
      <td><input name="mobile_no" type="text" id="mobile_no" value="<?php echo $row['mobile_no']; ?>"></td>
    </tr>
    <tr>
      <td>usn</td>
      <td><input name="usn" type="text" id="usn" value="<?php echo $row['usn']; ?>"></td>
    </tr>
    <tr>
      <td>email</td>
      <td><input name="email" type="text" id="email" value="<?php echo $row['email']; ?>"></td>
    </tr>
    <tr>
      <td>religion</td>
      <td><input name="religion" type="text" id="religion" value="<?php echo $row['religion']; ?>"></td>
    </tr>
    <tr>
      <td>caste</td>
      <td><input name="caste" type="text" id="caste" value="<?php echo $row['caste']; ?>"></td>
    </tr>
    <tr>
      <td>category</td>
      <td><input name="category" type="text" id="category" value="<?php echo $row['category']; ?>"></td>
    </tr>
    <tr>
      <td>gaurdian_name</td>
      <td><input name="gaurdian_name" type="text" id="gaurdian_name" value="<?php echo $row['gaurdian_name']; ?>"></td>
    </tr>
    <tr>
      <td>gaurdian_contact</td>
      <td><input name="gaurdian_contact" type="text" id="gaurdian_contact" value="<?php echo $row['gaurdian_contact']; ?>"></td>
    </tr>
    <tr>
      <td>semester</td>
      <td><input name="semester" type="text" id="semester" value="<?php echo $row['semester']; ?>"></td>
    </tr>
    <tr>
      <td>fees</td>
      <td><input name="fees" type="text" id="fees" value="<?php echo $row['fees']; ?>"></td>
    </tr>
    <tr>
      <td>joining_date</td>
      <td><input name="joining_date" type="text" id="joining_date" value="<?php echo $row['joining_date']; ?>"></td>
    </tr>
    <tr>
      <td>photo_link</td>
      <td><input name="photo_link" type="text" id="photo_link" value="<?php echo $row['photo_link']; ?>"></td>
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
	<td>library</td>
      <td><input name="library" type="text" id="library" value="<?php echo $row['library']; ?>"></td>
	  <tr>
	  <td>status</td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['status']; ?>"></td>
    </tr>
 
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


