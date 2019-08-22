<?php 
include_once 'dbconnect.php';
$i=0;
$sqldata1="select * from dealer";
$sqldata=mysql_query($sqldata1);
?>
<body background="v15.jpg">
<table border=4 align="center">
<br/><br/><br/>
<h1 align="center"> TABLE INFORMATION</h1>
<?php

while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'PINK':'#E6E6FA';

    ?>
	
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['dealer_id']; ?></td>
        <td><?php echo $row['company_name']; ?></td>
         <td><?php echo $row['cont_num']; ?></td>
          <td><?php echo $row['d_address']; ?></td>
		    <td><?php echo $row['email_id']; ?></td>
     

        <td class="button">
            <a href="d_update.php?id=<?php echo $row['dealer_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="d_delete.php?id=<?php echo $row['dealer_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<center>
<a href="Admin_home.html"><h2><B>BACK</B></h2></a> 
</center>
</body>