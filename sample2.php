<form name="form1" method="post" align="center">
<input type="submit" id="B1" name="B1" value="Run Query" /><br />
</form>
<div>
<?php
$c=mysql_connect("127.0.0.1","root","") or print mysql_error();
$d=mysql_select_db("hostel");
if(!$d)
echo "Databse not executed";
if(isset($_POST["B1"]))
{
        $r=mysql_query("Select * from student");
		?>
<table class="info" id="t1" border="1" align="center">
<tr>
<td><b>Roll No</b></td>
<td><b>Name</b></td></tr><?php
        while($du1=mysql_fetch_assoc($r))
        {
                ?>
    <tr>
	<td><?=$du1["roll_no"]?></td>
    <td><?=$du1["name"]?></td>
    <?php
        }?>
</table>
<?php
}

?>

</div>