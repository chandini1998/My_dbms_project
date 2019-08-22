<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM showroom WHERE sh_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		
		$new_dealer_id = $_POST['newName2'];
		$new_sh_name = $_POST['newName3'];
		$new_sh_address = $_POST['newName4'];
		$new_cont_num = $_POST['newName5'];
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE showroom SET dealer_id='$new_dealer_id',sh_name='$new_sh_name' ,sh_address='$new_sh_address',cont_num='$new_cont_num'WHERE sh_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=a_sh_updatedelete.php'>";
	}
	

?>
<body background="v15.jpg">
<form  method="POST">
<table align="center" bgcolor="#eee"  width="500px" height="300px">
</br></br>

<tr><td>dealer_id:</td><td> <input type="text" name="newName2" value="<?php echo $row['dealer_id']; ?>" required/></td></tr>
<tr><td>sh_name: </td><td><input type="text" name="newName3" value="<?php echo $row['sh_name']; ?>" required/></td></tr>
<tr><td>sh_address: </td><td><input type="text" name="newName4" value="<?php echo $row['sh_address']; ?>" required/></td></tr>
<tr><td>phone number: </td><td><input type="text" name="newName5" value="<?php echo $row['cont_num']; ?>"pattern="[0-9]{10}" required/></td></tr>
<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['sh_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<center>
<a href="a_sh_updatedelete.php"><h1>Back</h1></a> 
</center>
</form>
</body>