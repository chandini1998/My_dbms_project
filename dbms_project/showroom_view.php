<html>
<head>
<title>showroom  details</title>

</head>

<style>

div {
    height: 700px;
    width: 550px;
	position:absolute;
    top: 500px;
    right: 500px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: ;
    padding: 20px;
}
th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }
   
   input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}

</style>
<title> </title>
<body background="v15.jpg">
</br> </br> </br>
<center> <lable> <b><h1>SHOWROOM &nbsp  DETAILS</h1><b></lable></center>
<form action="" method="post"></br></br></br>
<table width='800' align='center' border='5' align="center">
<tr bgcolor ='violet'>
<th>   Dealer Id </th>
   <th>   Showroom name </th>
   <th>   Showroom address</th>
   <th>   phone number</th>
   
  

</tr>
<div>




Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun2()"/>
<script> function fun2() { window.location="front.html"; } </script></br>





Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun3()"/>
<script> function fun3() { window.location="Customer_home.html"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");

$query="select * from showroom";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	
	$dealer_id=$row[1];
$sh_name=$row[2];
$sh_address=$row[3];
$cont_num=$row[4];



?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $dealer_id; ?></td>
<td>   <?php echo $sh_name; ?></td>
<td>   <?php echo $sh_address; ?> </td>
<td>   <?php echo $cont_num; ?> </td>






</tr>

<?php  }
?>
</html>