<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> COURSE SUBJECT </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="course_subject.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
						<?php
$course_id=$_POST['course_id'];
//$subject_id=$_POST['subject_id'];
$semester=$_POST['semester'];
						
						?>
						
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
 <tr>
    <th scope="col">ID</th>
    <th scope="col">COURSE ID </th>
    <th scope="col">SUBJECT ID</th>
    <th scope="col">SEMESTER</th>

	<th></th>
	
  </tr>
 
 </thead>
  <tbody>
 
  <?php
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from course_subject cs, course c, subject sub where cs.course_id=c.course_id and cs.subject_id=sub.subject_id and cs.course_id='$course_id' and cs.semester='$semester'";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['sub_name']; ?></td>
    <td><?php echo $row['semester']; ?></td>

	<td><a onClick="return confirm ('Are you sure....?')" href="course_subject_delete.php?id=<?php echo $row['cs_id']; ?>">DELETE <img src="img/delete.png"></a></td>


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



