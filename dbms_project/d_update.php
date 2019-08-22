<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM dealer WHERE dealer_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		
		
		$new_company_name = $_POST['newName1'];
			$new_cont_num = $_POST['newName2'];
		$new_d_address = $_POST['newName3'];
		$new_email_id = $_POST['newName4'];
	
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE dealer SET company_name='$new_company_name',cont_num='$new_cont_num' ,d_address='$new_d_address',email_id='$new_email_id'WHERE dealer_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=d_updatedelete.php'>";
	}
	

?>
<body background="v15.jpg">
<form  method="POST">
</br><br/><br/><br/>
</br><br/><br/><br/>
<table align="center" bgcolor="#eee"  width="500px" height="300px">

<tr><td>company name:</td><td> <input type="text" name="newName1" value="<?php echo $row['company_name']; ?>" required/></td></tr>
<tr><td>phone: </td><td><input type="text" name="newName2" value="<?php echo $row['cont_num']; ?>"  pattern="[0-9]{10}" required/></td></tr>
<tr><td>dealer address: </td><td><input type="text" name="newName3" value="<?php echo $row['d_address']; ?>" required/></td></tr>
<tr><td>email: </td><td><input type="text" name="newName4" value="<?php echo $row['email_id']; ?>" required/></td></tr>
<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['dealer_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<center>
<a href="d_updatedelete.php"><h2>BACK</h2></a> 
</center>
</form>
</body>