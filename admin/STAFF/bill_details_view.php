<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STUDENT INFORMATION MANAGEMENT SYSTEM  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="bill_details.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table">
<thead>
  <tr>
    <th>sl.no</th>
    <th>Bill ID</th>
    <th>Product ID</th>
    <th>Quantity</th>
    <th>Price</th>
   <th>Rate</th>
    <th>EDIT</th>
	 <th>DELETE</th>
  </tr>
 </thead>
  <tbody>
  
  <tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td width="60"><a href="#"><img src="img/edit.png"></a></td>
	<td width="56"><a onClick="return confirm('Do you really want to delete...?');" href=""><img src="img/delete.png"></a></td>
    </tr>
  
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
