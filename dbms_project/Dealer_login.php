


<html>
<head>
<title> DEALER LOGIN FORM</title>
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
background-color: grey;
    border: none;
    color: black;
	}
	
div {
    height: 300px;
    width: 300px;
	position:absolute;
    top: 50px;
    right: 600px;
	border-radius: 10px;
    background-color: 0px;
    padding: 20px;
}
</style>



<body background="v15.jpg">

<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b><h2>DEALER&nbsp&nbspLOGIN&nbsp&nbspFORM</h2></b></u></label><br><br>

<label for="user_name"><h3><b>User name:</h3></b></label> 
<input placeholder="Enter your name" type="text" name="user_name" /></br>

<label for="password"><h3><b>Password:</b></h3></label> 
<input placeholder="Enter your password" type="password" name="password" /></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<p><a href="Dealer_reg.php" font face="verdana"> <h3>REGISTER HERE</h3></a></p>
<p><a href="login.html" font face="verdana"><B><H3> BACK</H3></B></a></p>


</form>
</div>
</body>



<?php
session_start();
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");
$user_name=$_POST['user_name'];
 $password=$_POST['password'];
 

if($user_name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$query=mysql_query("select * from dealer where user_name='$user_name' and password='$password'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   $_SESSION['user_name']=$user_name;
   
    //echo "<script> window.open('Dealer_home.php','_self')</script>";
	header("location: Dealer_home.html?id=".$user_name);
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>

</body>
</html>
