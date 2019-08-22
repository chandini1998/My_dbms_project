<html>
<head>
<title>customer Register Form</title>

</head>

<style>

div {
    height: 200px;
    width: 550px;
	position:absolute;
    top: 300px;
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
<body background="v15.jpg">
<form action="" method="post"></br></br></br>
<table width='800' align='center' border='5' align="center">
<tr bgcolor ='violet'>
   <th> Customer Id </th>
   <th>Customer Name</th>
    <th>Email</th>
   <th>Address</th>
   <th>Phone number</th>
   <th>User Name</th>
   <th>Password</th>
  

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun1()"/>
<script> function fun1() { window.location="front.html"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun3()"/>
<script> function fun3() { window.location="Cust_update.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");
$user_name=$_SESSION['user_name'];
$query="select cust_id,cust_name,email_id,c_address,cont_num,user_name,password from customer where user_name like '$user_name%'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$cust_id=$row[0];
$cust_name=$row[1];
$email_id=$row[2];
$c_address=$row[3];
$cont_num=$row[4];
$user_name=$row[5];
$password=$row[6];

/*#E9967A*/

?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $cust_id; ?></td>
<td>   <?php echo $cust_name; ?> </td>
<td>   <?php echo $email_id; ?> </td>
<td>   <?php echo $c_address; ?> </td>
<td>   <?php echo $cont_num; ?> </td>
<td>   <?php echo $user_name; ?> </td>
<td>   <?php echo $password; ?> </td>





</tr>

<?php  }
?>
</html>