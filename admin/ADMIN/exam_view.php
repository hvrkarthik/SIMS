<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>

<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> EXAM  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="exam.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
   <tr>
    <th scope="col">EXAM ID </th>
    <th scope="col">EXAM_NAME</th>
    <th scope="col">MIN MARKS</th>
	 <th scope="col">MAX MARKS</th>
	 <th scope="col">EXAM DATE</th>
	 <th scope="col">COURSE ID</th>
	  <th scope="col">SEMESTER</th>
	 <th scope="col">DESCRIPTION</th>
	<th></th>
	 <th></th>
	 <th></th>
  </tr>
  </thead>
  <tbody>
 <?php
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from exam e, course c where e.course_id=c.course_id";
 $res=mysql_query($sql); 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['exam_name']; ?></td>
    <td><?php echo $row['min_marks']; ?></td>
	<td><?php echo $row['max_marks']; ?></td>
	<td><?php echo $row['exam_date']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['semester']; ?></td>
	<td><?php echo $row['desc']; ?></td>
	     <td><a href="exam_subject_view.php?id=<?php echo $row['exam_id']; ?>">View Exam Subject</a>
	 <br/><a href="exam_subject.php?id=<?php echo $row['exam_id']; ?>">Add Exam Subject</a></td>
	<td><a href="exam_edit.php?id=<?php echo $row['exam_id']; ?>">EDIT <img src="img/edit.png"></a></td>
	<td><a onClick="return confirm ('Are you sure....?')" href="exam_delete.php?id=<?php echo $row['exam_id']; ?>">DELETE<img src="img/delete.png"></a></td>
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


