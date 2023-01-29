<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> COURSE  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="course.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">NAME</th>
    <th scope="col">DESCRIPTION</th>
	 <th scope="col">FEES</th>
	 <th></th>
	 <th></th>
	 	 <th></th>
  </tr>
 </thead>
  <tbody>
  
   <?php
   $i=0;
 
include('db.php');
 $sql="select * from course";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
  $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['desc']; ?></td>
	<td><?php echo $row['fees']; ?></td>
	<td><a href="course_edit.php?id=<?php echo $row['course_id']; ?>">EDIT <img src="img/edit.png"></a></td>
	<td><a onClick="return confirm ('Are you sure....?')" href="course_delete.php?id=<?php echo $row['course_id']; ?>">DELETE <img src="img/delete.png"></a></td>
     <td><a href="view_cs.php?id=<?php echo $row['course_id']; ?>">View Course Subject</a>
	 <br/><a href="add_cs.php?id=<?php echo $row['course_id']; ?>">Add Course Subject</a></td>
	 
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

