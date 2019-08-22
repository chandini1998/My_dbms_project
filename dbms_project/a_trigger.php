

<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}












mysql_select_db("vehicle_showroom", $con);
print "<h2 align='center'>Number of vehicle type using trigger</h2>";
print "<h3 align='center'>Number of vehicle type table</h3>";
$result = mysql_query("select * from no_of_vtype");

echo "<table border='1' align='center'>

<tr  bgcolor='violet'>

<th>v_type</th>
<th>no_of_v_type</th>

</tr >";

while($row = mysql_fetch_array($result))

{

echo "<tr  bgcolor='pink'>";

echo "<td>" . $row['v_type'] . "</td>";
echo "<td>" . $row['no_of_v_type'] . "</td>";


echo "</tr>";

}

echo "</table>";
print "<h3 align='center'>vehicle details</h3>";

$result1 = mysql_query("select * from vehicle");

echo "<table border='1' align='center'>

<tr bgcolor='violet'>


<th>dealer id</th>
<th>vehicle type</th>
<th>vehicle name</th>
<th>vehicle model</th>
<th>vehicle cost</th>


</tr>";

while($row= mysql_fetch_array($result1))

{

echo "<tr bgcolor='pink'>";

echo "<td>" . $row['dealer_id'] . "</td>";

echo "<td>" . $row['v_type'] . "</td>";
echo "<td>" . $row['v_name'] . "</td>";
echo "<td>" . $row['v_model'] . "</td>";
echo "<td>" . $row['v_cost'] . "</td>";



echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER my AFTER INSERT ON vehicle FOR EACH ROW UPDATE no_of_vtype SET no_of_v_type=no_of_v_type+1 WHERE v_type=NEW.v_type;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{
		$a = $_POST['dealer_id'];
		$b = $_POST['v_type'];
		$c = $_POST['v_name'];
		$d = $_POST['v_model'];
		$e = $_POST['v_cost'];
		
		$qry = mysql_query("insert into vehicle(dealer_id,v_type,v_name,v_model,v_cost) values('$a','$b','$c','$d','$e')");


mysql_query($qry,$con);
	}
	
 
?>
<style>

input[type=submit] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
input[type=reset] {
    width: 10%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=reset]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
 input[type=text], select {
    width: 20%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	
	
	
</style>
<body bgcolor="lightblue" >



<form method="post" action="">


<table width='800' align='center' border='5'>
<tr bgcolor ='violet'>
   <th> Dealer Id </th>
   <th>Company Name</th>
     <th>Phone number</th>
	  <th>Address</th>
     <th>Email</th>
  
 

</tr>
<div>
<center>
<h2>Insert Vehicle Details</h2>
<label for="dealer_id"><b>Dealer Id:</b></label> &nbsp &nbsp &nbsp &nbsp
<input placeholder="Enter dealer_id" type="text" name="dealer_id"/></br>
<label for="v_type"><b>Vehicle type:</b></label>  &nbsp &nbsp
<input placeholder="Enter vehicle type" type="text" name="v_type"/></br>

<label for="v_name"><b>Vehicle Name:</b></label> &nbsp
<input placeholder="Enter vehicle name" type="text" name="v_name"/></br>

<label for="v_model"><b>Vehicle Model:</b></label>  &nbsp
<input placeholder="Enter vehicle model" type="text" name="v_model"/></br>


<label for="v_cost"><b>Vehicle Cost:</b></label>  &nbsp &nbsp &nbsp
<input placeholder="Enter vehicle cost" type="text" name="v_cost"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>
</center>
</div>
<h2 align='center'>Dealer Details</h2>
</form>

<?php

$query1="select * from dealer ";
$run=mysql_query($query1);


while ($row=mysql_fetch_array($run))
{
$dealer_id=$row[0];
$company_name=$row[1];
$cont_num=$row[2];
$d_address=$row[3];
$email_id=$row[4];


?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $dealer_id; ?></td>
<td>   <?php echo $company_name; ?> </td>
<td>   <?php echo $cont_num; ?> </td>
<td>   <?php echo $d_address; ?> </td>
<td>   <?php echo $email_id; ?> </td>





</tr>

<?php
}


$result = mysql_query("select * from vehicle");

echo "<table border='1' align='center' style='margin-top:20px;'>

<tr  bgcolor='violet'>

<th>Dealer id</th>
<th>vehicle type</th>
<th>vehicle name</th>
<th>vehicle model</th>
<th>vehicle cost</th>


</tr>";

print "<h3 align='center'>vehicle details</h3>";
while($row = mysql_fetch_array($result))

{

echo "<tr  bgcolor='pink'>";
echo "<td>" . $row['dealer_id'] . "</td>";
echo "<td>" . $row['v_type'] . "</td>";
echo "<td>" . $row['v_name'] . "</td>";
echo "<td>" . $row['v_model'] . "</td>";
echo "<td>" . $row['v_cost'] . "</td>";


echo "</tr>";

}

echo "</table>";
print "<h3 align='center'>number of vehicle type table</h3>";

$result1 = mysql_query("select * from no_of_vtype");

echo "<table border='1' align='center'>

<tr  bgcolor='violet'>



<th>v_type</th>

<th>no_of_v_type</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr  bgcolor='pink'>";

echo "<td>" . $row['v_type'] . "</td>";

echo "<td>" . $row['no_of_v_type'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysql_close($con);
print "</body>";

?>
<a href="admin_home.html"><h1> BACK</h1></a>
