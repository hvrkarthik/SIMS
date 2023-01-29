<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> EXAM SUBJECT  </h3>
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
    <th scope="col">ES ID </th>
    <th scope="col">EXAM ID</th>
    <th scope="col">SUBJECT ID</th>
	 <th scope="col">COURSE ID</th>
	 <th scope="col">SEMESTER</th>

	 <th></th>
  </tr>
 
 </thead>
  <tbody>
  
   <?php
$id=$_REQUEST['id'];
$i=0; 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from exam_subject es, exam e, subject sub, course c where es.exam_id=e.exam_id and es.subject_id=sub.subject_id and es.course_id=c.course_id and es.exam_id='$id'";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['exam_name']; ?></td>
    <td><?php echo $row['sub_name']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['semester']; ?></td>
	 <td><a href="student_marks_view.php?es_id=<?php echo $row['es_id']; ?>">View MARKS</a>
	</td>

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


