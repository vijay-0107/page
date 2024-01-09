

<form name="form1" method="post">
<?php
$c=mysql_connect("127.0.0.1","root","") or print mysql_error();
$d=mysql_select_db("hostel");
if(!$d)
echo "Databse not executed";
if(isset($_POST["B1"]))
{
        $r=mysql_query("Select stud_name from student where stud_id in
(Select distinct stud_id from room_history where
(vacated>'2012-07-30' and vacated<'2013-11-30' or
occupied>'2013-08-01' and occupied<'2013-11-30'))");
        while($du1=mysql_fetch_assoc($r))
        {
                echo $du1["stud_name"]."<br>";
        }
}
if(isset($_POST["B2"]))
{
        $r1=mysql_query("select com_id from complain where comp_type='plumbing'
and status_comp='not resolved'
");
        while($du1=mysql_fetch_assoc($r1))
        {
                echo $du1["com_id"]."<br>";
        }
}

?>

<input type="submit" name="B1" value="Run Query 1" /><br />
<input type="submit" name="B2" value="Run Query 2" /><br />
</form>
