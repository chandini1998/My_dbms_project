

<?php 
session_start();
/*include_once 'dbconnect.php';*/

mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");

$cust_id=$_SESSION['cust_id'];
$v_id=$_GET['id'];
$q1="select * from customer where cust_id='$cust_id'";
$result1=mysql_query($q1);
$row1=mysql_fetch_array($result1);
$q2="select * from vehicle where v_id='$v_id'";
$result2=mysql_query($q2);
$row2=mysql_fetch_array($result2);





?>

<html>
<body background="v15.jpg">
<center>

<h1> SUCCESSFULLY BOOKED<h1>
<table>



<table width='400' align='center' border='5' align="center"  bgcolor='#eee'><tr  bgcolor='pink'><td>cust_id:</td><td><?php echo $row1['cust_id']; ?></td></tr>

<tr ><td>cust_name:</td><td><?php echo $row1['cust_name']; ?></td></tr>
<tr  bgcolor='pink'><td>email_id:</td><td><?php echo $row1['email_id']; ?></td></tr>
<tr><td>c_address:</td><td><?php echo $row1['c_address']; ?></td></tr>
<tr  bgcolor='pink'><td>phone:</td><td><?php echo $row1['cont_num']; ?></td></tr>

 

<tr><td>v_id:</td><td><?php echo $row2['v_id']; ?></td></tr>
<tr  bgcolor='pink'><td>dealer_id:</td><td><?php echo $row2['dealer_id']; ?></td></tr>
<tr><td>v_type:</td><td><?php echo $row2['v_type']; ?></td></tr>
<tr  bgcolor='pink'><td>v_name:</td><td><?php echo $row2['v_name']; ?></td></tr>
<tr><td>v_model:</td><td><?php echo $row2['v_model']; ?></td></tr>
<tr  bgcolor='pink'><td>v_cost:</td><td><?php echo $row2['v_cost']; ?></td></tr>


 
<tr ><td>Ordered date :</td><td><?php echo  date("d/m/Y");?></td></tr>
<tr  bgcolor='pink'><td>expected delivery date </td><td><?php  $date = strtotime("+7 day");
echo date('d/m/Y', $date); ?></td></tr>
</center>
</table>

</body>
</html>
</br></br>


<h2>*** THANK YOU FOR BOOKING ***<h2>
</br></br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun1()"/>
<script> function fun1() { window.location="front.html"; } </script></br>

<?php

$a=date("y-m-d");
$date = strtotime("+7 day");
$b= date('y-m-d', $date);

$q3="insert into sales(v_id,cust_id,ord_date,del_date) values('$v_id','$cust_id','$a','$b')";
mysql_query($q3);









?>