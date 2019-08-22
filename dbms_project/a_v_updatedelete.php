<?php 
include_once 'dbconnect.php';
$i=0;
$sqldata1="select * from vehicle";
$sqldata=mysql_query($sqldata1);
?>
<body background="v15.jpg">
<table border=4 align="center">
</br></br></br>
<h1 align="center"> TABLE INFORMATION</h1>
<?php

while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'PINK':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['v_id']; ?></td>
        <td><?php echo $row['dealer_id']; ?></td>
		        <td><?php echo $row['v_type']; ?></td>
         <td><?php echo $row['v_name']; ?></td>
		         <td><?php echo $row['v_model']; ?></td>
          <td><?php echo $row['v_cost']; ?></td>
		    
       

        <td class="button">
            <a href="a_v_update.php?id=<?php echo $row['v_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="a_v_delete.php?id=<?php echo $row['v_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
</BR></BR>
<center>
<a href="Admin_home.html"><b><h2>BACK</h2></b></a> 
</center>
</body>