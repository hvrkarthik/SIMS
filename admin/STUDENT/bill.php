<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>
<body>



<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li><a href="#">Library</a><span class="divider">&raquo;</span></li>
			<li class="active">Data</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5><i class="black-icons blocks_images"></i>BILL</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<form id="formID" method="post" action="bill_insert.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="386" border="0" align="center">
    <tr>
      <td>Bill Number </td>
      <td><input name="bill_number" type="text" id="bill_number" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Customer ID </td>
      <td><select name="customer_id" id="customer_id">
	  <?php
	  include('db_connection.php');
	  $sql="select * from customer_details";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['f_name']; ?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Bill Date </td>
      <td><input name="bill_date" type="text" class="validate[required,custom[date]]" id="bill_date" value="<?php echo $date ?>"></td>
    </tr>
    <tr>
      <td>Discount</td> 
      <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>VAT</td>
      <td><input name="vat" type="text" id="vat" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>








