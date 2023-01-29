<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> ATTENDANCE  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="attendance.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
    <th scope="col">ATTENDANCE_ID </th>
    <th scope="col">STUD_ID</th>
    <th scope="col">SUB_ID</th>
	 <th scope="col">DATE</th>
	 <th scope="col">TIME</th>
	 <th scope="col">STATUS</th>
	 <th></th>
	 <th></th>
  </tr>
 </thead>
  <tbody>
  
   <?php
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from attendance a, student_master sm, subject sub where a.stud_id=sm.stud_id and a.subject_id=sub.subject_id";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['stud_id']; ?></td>
    <td><?php echo $row['sub_id']; ?></td>
	<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['time']; ?></td>
	<td><?php echo $row['status']; ?></td>

	<td><a href="attendance_edit.php?id=<?php echo $row['att_id']; ?>"><img src="img/edit.png"></a></td>
	<td><a onClick="return confirm ('Are you sure....?')"  href="attendance_delete.php?id=<?php echo $row['att_id']; ?>"><img src="img/delete.png"></a></td>
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

