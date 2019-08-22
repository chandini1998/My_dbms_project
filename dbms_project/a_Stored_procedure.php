
<html>
<head>
<title>Customer Register Form</title>

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
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
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
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
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
    width: 400px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: ;
    padding: 20px;
}
</style>
<body bgcolor="lightblue" >




<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>





<label for="cust_name"><b>CUSTOMER NAME:</b></label> 
<input placeholder="Enter customer name" type="text" name="cust_name"/></br>

<label for="email_id"><b>EMAIL:</b></label> 
<input placeholder="Enter customer email" type="email" name="email_id"/></br>

<label for="c_address"><b>ADDRESS:</b></label> 
<input placeholder="Enter customer address" type="text" name="c_address"/></br>

<label for="cont_num"><b>PHONE NUMBER:</b></label> 
<input placeholder="Enter customer phone number" type="number" name="cont_num"/></br>

<label for="user_name"><b>USER NAME:</b></label> 
<input placeholder="Enter user name" type="text" name="user_name"/></br>

<label for="password"><b>PASSWORD:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>





&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>



</form>
</div>

<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.html"; } </script></br>
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="front.html"; } </script></br>
</body>


</html>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");





if(isset($_POST['submit']))
{
 

 $cust_name=$_POST['cust_name'];
  $email_id=$_POST['email_id'];
  $c_address=$_POST['c_address'];
   $cont_num=$_POST['cont_num'];
    $user_name=$_POST['user_name'];
  $password=$_POST['password'];

 



if($cust_name =='')
{
echo "<script> alert('Please enter customer name')</script>";
exit();
}

if($email_id =='')
{
echo "<script> alert('Please enter customer email')</script>";
exit();
}
if($c_address =='')
{
echo "<script> alert('Please enter customer address')</script>";
exit();
}
if($cont_num == ''  )
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}
if(strlen($cont_num)!=10  )
{
echo "<script> alert('Please enter 10 digit phone number')</script>";
exit();
}
if($user_name =='')
{
echo "<script> alert('Please enter user name')</script>";
exit();
}
if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}



$check_email_id="select * from customer where email_id='$email_id'";

$run=mysql_query($check_email_id);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}







$sql= " CALL insertdata('".$_POST["cust_name"]."','".$_POST["email_id"]."','".$_POST["c_address"]."','".$_POST["cont_num"]."','".$_POST["user_name"]."','".$_POST["password"]."')";
if(mysql_query($sql))
{
	echo "<script> alert('Data successfully inserted via stored procedure')</script>";
	
}
}



?>
