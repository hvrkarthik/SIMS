<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STUDENT MASTER </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">

						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
    <th scope="col">STUD ID</th>
    <th scope="col">NAME</th>

	 <th scope="col"></th>

    <th scope="col">Permanent ADDRESS</th>

   <th scope="col">ROLL NO</th>
	 <th scope="col">EMAIL</th>

    <th scope="col">CASTE</th>

	 <th scope="col">GAURDIAN Details</th>

   <th scope="col">FEES</th>
   <th scope="col">JOINING DATE</th>
   <th scope="col">PHOTO LINK</th>
   <th>Fees</th>

   <th></th>
</tr>
 </thead>
  <tbody>
 <?php
// $course_id=$_REQUEST['course_id'];
// $sem=$_REQUEST['sem'];
$i=0; 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_master sm, course c where sm.course_id=c.course_id and sm.usn='$uname'";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['fname']; ?> . <?php echo $row['lname']; ?></td>
	<td>DOB : <font color="#FF0000"><?php echo $row['dob']; ?></font> <br/> Gender : <font color="#FF0000"><?php echo $row['gender']; ?></font></td>
    <td><?php echo $row['p_address']; ?> <br/> Mob : <font color="#FF0000"><?php echo $row['mobile_no']; ?></font></td>
    <td><font color="#FF0000"><?php echo $row['usn']; ?></font> <br/> Course : <font color="#FF0000"><?php echo $row['name']; ?></font> <br/> Sem : <font color="#FF0000"><?php echo $row['semester']; ?></font></td>
    <td><?php echo $row['email']; ?></td>

    <td><?php echo $row['caste']; ?> <br/> Cat : <font color="#FF0000"><?php echo $row['category']; ?></font></td>
    <td><?php echo $row['gaurdian_name']; ?> <br/> <?php echo $row['gaurdian_contact']; ?></td>

    <td><?php echo $row['fees']; ?></td>
    <td><?php echo $row['joining_date']; ?></td>
    <td><img src="files/<?php echo $row['photo_link']; ?>" width="100" height="100"></td>

	<td><a href="fees_view.php?id=<?php echo $row['stud_id']; ?>">VIEW FEES</a></td>
	<td><a href="student_master_edit.php?id=<?php echo $row['stud_id']; ?>">EDIT <img src="img/edit.png"></a></td>


     </tr>
  <?php
  }
  ?>
  
  
  </tbody>
</table>
</div>
					</div>
				</div>
			</div>
		</div>
		
        
	</div>
</div>


 <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');   ?>

