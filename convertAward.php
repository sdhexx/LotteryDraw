<?php
$con = mysql_connect("localhost","mysky","01952030");
   
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}


mysql_select_db("ywzc", $con);

$result = mysql_query("update tb_cust_award set Convert_date=sysdate() where Phone_nbr=$_POST[phone_nbr]");
$result = mysql_query($sql, $con);

mysql_close($con);
?>
