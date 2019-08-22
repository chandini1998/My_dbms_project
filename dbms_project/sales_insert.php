
<html>
<head>
<title>showroom detail insert</title>

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
    height: 550px;
    width: 300px;
	position:absolute;
    top: 100px;
    right: 600px;
	border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
}
body{
background-color:black;
opacity:0.9;

}
.c1{
	background-color:silver;

}
form
</style>
<body background="12.jpg" >

</body>
<body>


<div>
<form method="post" action="" class="c1">
<label  for="reg">&nbsp&nbsp&nbsp<u><b>SALES&nbsp&nbspDETAIL&nbsp&nbspINSERT</b></u></label><br><br>

<label for="v_id"><b>VEHICLE ID:</b></label> 
<input placeholder="Enter vehicle id" type="text" name="v_id"/></br>

<label for="cust_id"><b>CUSTOMER ID:</b></label> 
<input placeholder="Enter customer id" type="text" name="cust_id"/></br>

<label for="sh_id"><b>SHOWROOM ID:</b></label> 
<input placeholder="Enter showroom id" type="text" name="sh_id"/></br>


<label for="ord_date"><b>ORDERED DATE:</b></label> 
<input placeholder="Enter ordered date" type="date" name="ord_date"/></br>

<label for="del_date"><b>DELIVER DATE:</b></label> 
<input placeholder="Enter delivered date" type="date" name="del_date"/></br>





&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="INSERT" /> 
<!--p>Click here for<a href="Customer_login.php" font face="verdana">   Login</a></p>
<p>Click here for<a href="Dealer_reg.php" font face="verdana">   dealer registraton</a></p>
<p>Click here for<a href="Admin_login.php" font face="verdana">   admin login</a></p>
-->

</form>
</div>
</body>


</html>


<?php

//include_once 'dbconnect.php';
session_start();
$con=mysqli_connect("localhost","root","","vehicleshowroom");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

if(isset($_POST['submit']))
{
 
 $v_id=$_POST['v_id'];
 $cust_id=$_POST['cust_id'];
 $sh_id=$_POST['sh_id'];
  $ord_date=$_POST['ord_date'];
   $del_date=$_POST['del_date'];
if($v_id =='')
{
echo "<script> alert('Please enter vehicle id')</script>";
exit();
}

if($cust_id =='')
{
echo "<script> alert('Please enter customer id')</script>";
exit();
}

if($sh_id =='')
{
echo "<script> alert('Please enter showroom id')</script>";
exit();
}
if($ord_date == ''  )
{
echo "<script> alert('Please enter ordered date')</script>";
exit();
}
if($del_date == ''  )
{
echo "<script> alert('Please enter  date')</script>";
exit();
}

$query= "insert into sales(v_id,cust_id,sh_id,ord_date,del_date) values ('$v_id','$cust_id','$sh_id','$ord_date','$del_date')";

if(mysqli_query($con,$query))
{
$_SESSION['dealer_id']=$v_id;
echo "<script> alert('Sales detail inserted succesfully')</script>";

}


}
//mysqli_close($con);

?>
