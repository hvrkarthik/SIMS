<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> FEES  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="fees.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table table-bordered" id="sample_1">
<thead>
 <tr>
    <th scope="col">ID</th>

    <th scope="col">DATE</th>
    <th scope="col">AMOUNT</th>
    <th scope="col">MODE OF PAYMENT </th>
    <th scope="col">MODE NO</th>
	<th></th>
	<th></th>
  </tr>
  
 </thead>
  <tbody>

  <?php
$id=$_REQUEST['id'];
 $i=0;
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from fees f, student_master sm where f.stud_id=sm.stud_id and f.stud_id='$id'";
 $res=mysql_query($sql);
 
 while($row=mysql_fetch_array($res))
 {
 $i=$i+1;
 ?>
  <tr>
    <td><?php echo $i; ?></td>

    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['mode_of_payment']; ?></td>
    <td><?php echo $row['mode_no']; ?></td>
	<td><a href="fees_edit.php?id=<?php echo $row['fees_id']; ?>">EDIT <img src="img/edit.png"></a></td>
	<td><a onClick="return confirm ('Are you sure....?')" href="fees_delete.php?id=<?php echo $row['fees_id']; ?>">DELETE<img src="img/delete.png"></a></td>


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



