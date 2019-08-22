
<html>
<head>
<title>VEHICLE DETAIL INSERT</title>

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
    background-color: ;
    padding: 20px;
}
body{
background-color:black;
opacity:0.9;

}
.c1{
	background-color:;

}
form
</style>
<body background="v15.jpg" >

</body>
<body>


<div>
<form method="post" action="" class="c1">
<label  for="reg">&nbsp&nbsp&nbsp<u><b><h3>VEHICLE&nbsp&nbspDETAIL&nbsp&nbspINSERT</h3></b></u></label><br><br>


<label for="dealer_id"><b>DEALER ID:</b></label> 
<input placeholder="Enter dealer id" type="text" name="dealer_id"/></br>

<label for="v_type"><b>VEHICLE TYPE:</b></label> 
<input placeholder="Enter vehicle type" type="text" name="v_type"/></br>

<label for="v_name"><b>VEHICLE NAME:</b></label> 
<input placeholder="Enter vehicle name" type="text" name="v_name"/></br>


<label for="v_model"><b>VEHICLE MODEL:</b></label> 
<input placeholder="Enter vehicle model" type="text" name="v_model"/></br>

<label for="v_cost"><b>VEHICLE COST:</b></label> 
<input placeholder="Enter vehicle cost" type="number" name="v_cost"/></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" /> 
<p><a href="Admin_home.html" font face="verdana"> <h3>BACK</h3></a></p>
<p><a href="front.html" font face="verdana"> <h3>LOGOUT </h3></a></p>



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
 
 $dealer_id=$_POST['dealer_id'];
 $v_type=$_POST['v_type'];
 $v_name=$_POST['v_name'];
  $v_model=$_POST['v_model'];
  $v_cost=$_POST['v_cost'];
 
 


if($dealer_id =='')
{
echo "<script> alert('Please enter daeler id')</script>";
exit();
}if($v_type =='')
{
echo "<script> alert('Please enter vehicle type')</script>";
exit();
}



if($v_name =='')
{
echo "<script> alert('Please enter vehicle name')</script>";
exit();
}

if($v_model =='')
{
echo "<script> alert('Please enter vehicle model')</script>";
exit();
}
if($v_cost =='')
{
echo "<script> alert('Please enter vehicle cost')</script>";
exit();
}
$query= "insert into vehicle(dealer_id,v_type,v_name,v_model,v_cost) values ('$dealer_id','$v_type','$v_name','$v_model','$v_cost')";

if(mysqli_query($con,$query))
{
/*$_SESSION['admin_id']=$admin_id;*/
echo "<script> alert('Vehicle detail inserted succesfully')</script>";

}


}
//mysqli_close($con);

?>
