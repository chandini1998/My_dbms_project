

<style type='text/css'>
body { 
background : url("v15.jpg");
background-repeat:no-repeat;
 background-size: 200%;

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
    height: 350px;
    width: 450px;
	position:absolute;
    top: 70px;
    right: 500px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #eee;
    padding: 20px;
}

</style>
<body>
<div>
<form action="" method="get"><br/><br/>

<b>Enter the showroom name: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOUGOUT" onclick="fun1()"/>
<script> function fun1() { window.location="front.html"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun3()"/>
<script> function fun3() { window.location="Admin_home.html"; } </script></br>
</div>



</form>




</body>
</html>

<?php

mysql_connect("localhost","root","");
mysql_select_db("vehicle_showroom") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$sh_name=$_GET['value'];
$query1="select dealer_id from  showroom where sh_name like '$sh_name%'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
$b=$row1['dealer_id'];
/*$query="select * from vehicle where v_id in(select v_id from vehicle v ,showroom_vehicle sv where v.v_id=sv.v_id and showroom_name like '$sh_name%'";*/
$query="select* from  vehicle where dealer_id='$b'";
?>

<table width='800' align='center' border='5' style="margin-top:500px;">
<tr bgcolor ='violet'>
    <th>Vehicle Id</th>
   <th>Vehicle Type</th>
   <th>Vehicle Name</th>
	   <th>Vehicle Model</th>
	    <th>Vehicle Cost</th>
	 <th>Vehicle booking</th>
   </tr>
<?php

$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
$v_id=$row[0];
$v_type=$row[2];
$v_name=$row[3];
$v_model=$row[4];
$v_cost=$row[5];


?>


<tr align='center' bgcolor=''>
<td>   <?php echo $v_id; ?> </td>
<td>   <?php echo $v_type; ?> </td>
<td>   <?php echo $v_name; ?> </td>
<td>   <?php echo $v_model; ?> </td>
<td>   <?php echo $v_cost; ?> </td>
<td class="button" width="20px">
            <a href="a_display.php?id=<?php echo $row['v_id']; ?>"><input type="button" name="book" value="book"></a>
</tr>

<?php

}
}
?>
</html>
