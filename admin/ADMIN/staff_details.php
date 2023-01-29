<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STAFF  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="staff.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
    <th scope="col">STAFF ID </th>
    <th scope="col">NAME</th>
   
	 <th scope="col"></th>
    <th scope="col">PERSONAL_INFO</th>
	 <th scope="col">EMAIL</th>
	 <th scope="col">QUALI </th>
    <th scope="col">COURSE ID</th>
    <th scope="col">JOINING DATE</th>
	 <th scope="col">PHOTO LINK</th>
	
  </tr>
  </thead>
  <tbody>
 <?php
 $id=$_REQUEST['id'];
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from staff st, course c where st.course_id=c.course_id and st.staff_id='$id'";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
  $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['fname']; ?> . <?php echo $row['lname']; ?></td>
	<td>DOB : <font color="#FF0000"><?php echo $row['dob']; ?></font> <br/> Gender : <font color="#FF0000"><?php echo $row['gender']; ?></font></td>
	<td>ADDRESS : <font color="#FF0000"><?php echo $row['p_address']; ?></font> <br/> Mobile No : <font color="#FF0000"><?php echo $row['mobile_no']; ?></font></td>
	<td><?php echo $row['email']; ?></td>
    <td><?php echo $row['quali']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['joining_date']; ?></td>
	<td><img src="files/<?php echo $row['photo_link']; ?>" width="100" height="100"></td>
	
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


