<?php
$con = mysql_connect("localhost","mysky","01952030");
mysql_query("SET NAMES 'gb2313'");
mysql_query("SET CHARACTER SET 'gb2313'");
mysql_query("SET CHARACTER_SET_RESULT=utf8");
   
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("ywzc", $con);

$sql="select count(*) as cnt from tb_cust_award where Phone_nbr=$_POST[phone_nbr]";
$result = mysql_query($sql, $con);
$row = mysql_fetch_array($result);
if ($row['cnt'] > 0) {
	echo "-1";
} else {
	$sql="INSERT INTO tb_cust_award (Phone_nbr,Cust_name,Enterprise_id,Award_id) VALUES ($_POST[phone_nbr], '$_POST[cust_name]', $_POST[enterprise_id], $_POST[award_id])";
	if (!mysql_query($sql, $con))
  {
  	die('Error: ' . mysql_error());
  }
	echo "1";
}

mysql_close($con);
?>
