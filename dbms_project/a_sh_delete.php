<?php 
include_once 'dbconnect.php';
$i=0;

    $id = $_GET['id'];
    $delete = "DELETE FROM showroom WHERE sh_id='".$id."'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from showroom";
$sqldata=mysql_query($sqldata1);
?>
<body background="v15.jpg">
<table border=4 align="center">

<h1 align="center"> TABLE INFORMATION</h1>
<?php
while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'pink':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['sh_id']; ?></td>
		<td><?php echo $row['dealer_id']; ?></td>
        <td><?php echo $row['sh_name']; ?></td>
         <td><?php echo $row['sh_address']; ?></td>
         <td><?php echo $row['cont_num']; ?></td>
         
        <td class="button">
            <a href="a_sh_update.php?id=<?php echo $row['sh_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="a_sh_delete.php?id=<?php echo $row['sh_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<center>
<a href="a_sh_updatedelete.php"><h1>Back</h1></a>
 </center>
</body>