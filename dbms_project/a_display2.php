
<html>
<body background="d2.PNG">
<center>
<h2>SALES DETAIL</h2>
<table>



<table width='400' align='center' border='5' align="center"  bgcolor='pink'>

<?php 
session_start();
/*include_once 'dbconnect.php';*/

mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");


$q3="select * from sales";
$r=mysql_query($q3);

while($ro=mysql_fetch_array($r))
{
	
	


$l=$ro['cust_id'];
$q1="select * from customer where cust_id='$l'";
$result1=mysql_query($q1);
$row1=mysql_fetch_array($result1);
$m=$ro['v_id'];
$q2="select * from vehicle where v_id='$m'";
$result2=mysql_query($q2);
$row2=mysql_fetch_array($result2);





?>

<tr><td>cust_id:</td><td><?php echo $row1['cust_id']; ?></td></tr>
<tr><td>cust_name:</td><td><?php echo $row1['cust_name']; ?></td></tr>
<tr><td>email_id:</td><td><?php echo $row1['email_id']; ?></td></tr>
<tr><td>c_address:</td><td><?php echo $row1['c_address']; ?></td></tr>
<tr><td>phone:</td><td><?php echo $row1['cont_num']; ?></td></tr>

 

<tr><td>v_id:</td><td><?php echo $row2['v_id']; ?></td></tr>
<tr><td>dealer_id:</td><td><?php echo $row2['dealer_id']; ?></td></tr>
<tr><td>v_type:</td><td><?php echo $row2['v_type']; ?></td></tr>
<tr><td>v_name:</td><td><?php echo $row2['v_name']; ?></td></tr>
<tr><td>v_model:</td><td><?php echo $row2['v_model']; ?></td></tr>
<tr><td>v_cost:</td><td><?php echo $row2['v_cost']; ?></td></tr>
<tr><td colspan="2" bgcolor="violet"></td></tr>
<tr><td colspan="2" bgcolor="violet"></td></tr>
<?php

}
?>
 

</table>

</body>
</html>
</br></br>

</BR>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.html"; } </script></br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun2()"/>
<script> function fun2() { window.location="front.html"; } </script></br>

