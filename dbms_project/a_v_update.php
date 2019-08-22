<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM vehicle WHERE v_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
	
		$new_dealer_id = $_POST['newName2'];
		$new_v_type = $_POST['newName3'];
		$new_v_name = $_POST['newName4'];
		$new_v_model = $_POST['newName5'];
		$new_v_cost = $_POST['newName6'];
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE vehicle SET dealer_id='$new_dealer_id',v_type='$new_v_type',v_name='$new_v_name' ,v_model='$new_v_model',v_cost='$new_v_cost'WHERE v_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=a_v_updatedelete.php'>";
	}
	

?>
<body background="v15.jpg">
<form  method="POST">
<table align="center" bgcolor="#eee"  width="500px" height="300px">

<tr><td>dealer_id:</td><td> <input type="text" name="newName2" value="<?php echo $row['dealer_id']; ?>" required/></td></tr>
<tr><td>v_type: </td><td><input type="text" name="newName3" value="<?php echo $row['v_type']; ?>" required/></td></tr>
<tr><td>v_name: </td><td><input type="text" name="newName4" value="<?php echo $row['v_name']; ?>" required/></td></tr>
<tr><td>v_model: </td><td><input type="text" name="newName5" value="<?php echo $row['v_model']; ?>" pattern="[0-9]{4}" required/></td></tr>
<tr><td>v_cost: </td><td><input type="text" name="newName6" value="<?php echo $row['v_cost']; ?>" required/></td></tr>
<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['v_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<center>
<a href="a_v_updatedelete.php"><h1>Back</h1></a> 
</center>
</form>
</body>