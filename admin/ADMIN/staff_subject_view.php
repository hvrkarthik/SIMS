<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STAFF SUBJECT  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="staff_subject.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
  <tr>
   <th scope="col">ID</th>
    <th scope="col">STAFF ID </th>
    <th scope="col">SUBJECT ID</th>
	 <th></th>
	 <th></th>
  </tr></thead>
  <tbody>
 
 <?php
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from staff_subject ss, staff st, subject sub where ss.staff_id=st.staff_id and ss.subject_id=sub.subject_id";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['sub_name']; ?></td>
    
	<td><a href="staff_subject_edit.php?id=<?php echo $row['staff_subject_id']; ?>">EDIT <img src="img/edit.png"></a></td>
	<td><a onClick="return confirm ('Are you sure....?')" href="staff_subject_delete.php?id=<?php echo $row['staff_subject_id']; ?>">DELETE <img src="img/delete.png"></a></td>
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



