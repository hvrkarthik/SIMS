<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STUDENT MARKS  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="#">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
    <th>ID </th>

    <th>STUDENT</th>
	 <th>MARKS</th>
	 
		 <th></th>
  </tr>
 </thead>
  <tbody>
 <?php
 $es_id=$_REQUEST['es_id'];
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from student_marks s, exam_subject es, student_master sm where s.es_id=es.es_id and s.stud_id=sm.stud_id and es.es_id='$es_id'";
 $res=mysql_query($sql); 
 while($row=mysql_fetch_array($res))
{
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['fname']; ?> / <?php echo $row['usn']; ?></td>

	<td><?php echo $row['marks']; ?></td>
	
	
	<td><a onClick="return confirm ('Are you sure....?')" href="student_marks_delete.php?id=<?php echo $row['sm_id']; ?>">DELETE</a></td>
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
<?php include('footer.php');   ?>

