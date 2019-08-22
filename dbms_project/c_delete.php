<?php 
include_once 'dbconnect.php';
$i=0;

    $id = $_GET['id'];
    $delete = "DELETE FROM customer WHERE cust_id='".$id."'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from customer";
$sqldata=mysql_query($sqldata1);
?>
<body background="v15.jpg">
<table border=4 align="center">
</br><br/><br/>
<h1 align="center"> TABLE INFORMATION</h1>
<?php
while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'pink':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
      
		
        <td><?php echo $row['cust_name']; ?></td>
		 <td><?php echo $row['email_id']; ?></td>
		    <td><?php echo $row['c_address']; ?></td>
		 <td><?php echo $row['cont_num']; ?></td>
      
		 
        
         
        <td class="button">
            <a href="c_update.php?id=<?php echo $row['cust_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="c_delete.php?id=<?php echo $row['cust_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<center>
<a href="c_updatedelete.php"><h2>BACK</h2></a> 
</center>
</body>