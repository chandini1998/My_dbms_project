
<html>
<head>
<title>dealer Register Form</title>

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
    width: 80%;
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
<!--background-color: grey;-->
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 300px;
	position:absolute;
    top: 100px;
    
	right:600px;
	border-radius: 0px;
    background-color: ;
    padding: 20px;
}
body{
background-color:black;
opacity:0.9;

}
.c1{
	<!--background-color:silver;-->

}
form
</style>
<body background="V15.jpg" >


</br><label for="reg"><b><h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DEALER&nbsp&nbspREGISTRATION&nbsp&nbspFORM</h2></b></label>

<div>
<form method="post" action="" class="c1">



<!--<label for="cust_id"><b>CUSTOMER ID:</b></label> 
<input placeholder="Enter customer id" type="text" name="cust_id"/></br>-->

<label for="company_name"><b>COMPANY NAME:</b></label> 
<input placeholder="Enter company name" type="text" name="company_name"/></br>

<label for="cont_num"><b>PHONE NUMBER:</b></label> 
<input placeholder="Enter dealer phone number" type="number" name="cont_num" pattern="[789]{1}[0-9]{9}"/></br>

<label for="d_address"><b>ADDRESS:</b></label> 
<input placeholder="Enter dealer address" type="text" name="d_address"/></br>


<label for="email_id"><b>EMAIL:</b></label> 
<input placeholder="Enter dealer email" type="email" name="email_id"/></br>




<label for="user_name"><b>USER NAME:</b></label> 
<input placeholder="Enter user name" type="text" name="user_name"  pattern="[a-zA-Z][a-zA-Z0-9\s]*"/></br>

<label for="password"><b>PASSWORD:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>




&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" /> 

<p>&nbsp &nbsp &nbsp<a href="Dealer_login.php" font face="verdana"><b>BACK</b></a></p>

</form>
</div>
</body>


</html>


<?php

//include_once 'dbconnect.php';
session_start();
$con=mysqli_connect("localhost","root","","vehicle_showroom");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

if(isset($_POST['submit']))
{
 
 
 $company_name=$_POST['company_name'];
 $cont_num=$_POST['cont_num'];
  $email_id=$_POST['email_id'];
  $d_address=$_POST['d_address'];
    $user_name=$_POST['user_name'];
  $password=$_POST['password'];

 


if($company_name =='')
{
echo "<script> alert('Please enter company name')</script>";
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
if($d_address =='')
{
echo "<script> alert('Please enter dealer address')</script>";
exit();
}
if($email_id =='')
{
echo "<script> alert('Please enter dealer email')</script>";
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





$check_email_id="select * from dealer where email_id='$email_id'";

$run=mysqli_query($con,$check_email_id);

if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}
/*$check_accnum="select * from customer_details where accnum='$accnum'";

$go=mysqli_query($con,$check_accnum);

if(mysqli_num_rows($go)>0)
{
echo "<script> alert('Account number already exists') </script>";
exit();
}
*/
$query= "insert into dealer(company_name,cont_num,d_address,email_id,user_name,password) values ('$company_name','$cont_num','$d_address','$email_id','$user_name','$password')";

if(mysqli_query($con,$query))
{
$_SESSION['user_name']=$user_name;
echo "<script> alert('User is Succussfully registered')</script>";
header("location: Dealer_login.php?id=".$user_name);
}


}
//mysqli_close($con);

?>
