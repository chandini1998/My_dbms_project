<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['user_name']))
{
header("location: Cust_update.php");
}
?>
<head>
<title>Update Customer Information</title>
</head>


<style>
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
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

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 40%;
    background-color:gray;
	
    color: white;
    padding: 14px 20px;
    margin: 5px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color:  #4CAF50;
    border: none;
    color: black;
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
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 20px;
    right: 700px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: ;
    padding: 20px;
}

</style>

<body background="v15.jpg">
</br></br>
<div>
<form method="post" action="">
<table width='1000' align='center' border='5'>
<tr bgcolor ='violet'>
   <th> Customer Id </th>
   <th>Customer Name</th>
     <th>Email</th>
   <th>Address</th>
   <th>Phone number</th>
   <th>User Name</th>
   <th>Password</th>
 

</tr>






<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b><h2>CUSTOMER_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</h2></b></u></label><br>



<label for="cust_name"><b>Customer Name:</b></label> 
<input placeholder="Enter your name" type="text" name="cust_name" pattern="[a-zA-Z][a-zA-Z0-9\s]*"/></br>

<label for="email_id"><b>Email:</b></label> 
<input placeholder="Enter your email" type="text" name="email_id"/></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>

<label for="c_address"><b>Address:</b></label> 
<input placeholder="Enter your address" type="text" name="c_address"/></br>

<label for="cont_num"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="cont_num" pattern="[789]{1}[0-9]{9}"/>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.html"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="front.html"; } </script></br></br></br>
</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");
$get_user_name=$_SESSION['user_name'];
$query="select * from customer where user_name='$get_user_name'";
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


if(isset($_POST['submit']))
{
 
$cust_name=$_POST['cust_name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
 $c_address=$_POST['c_address'];
 $cont_num=$_POST['cont_num'];
 

if($cust_name =='')
{
echo "<script> alert('Please enter name')</script>";
exit();
}

if($email_id =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($c_address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($cont_num == '')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if (strlen($cont_num)!=10)
{
echo "<script> alert('Please enter 10 digit valid phone number')</script>";
exit();
}

$query="update customer set cust_name='$cust_name',email_id='$email_id', password='$password',c_address='$c_address',cont_num='$cont_num'  where user_name='$get_user_name'";
if(mysql_query($query))
{
$_SESSION['user_name']=$get_user_name;

echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='persnal_view.php?'><b>View result</b></br></a>"; 
echo "<br>";
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>