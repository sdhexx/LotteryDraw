<?php
$con = mysql_connect("localhost","mysky","01952030");
mysql_query("SET NAMES 'gb2313'");
mysql_query("SET CHARACTER SET 'gb2313'");
mysql_query("SET CHARACTER_SET_RESULT=utf8");
   
if ($con)
{
	mysql_select_db("ywzc", $con);


	$result = mysql_query("select Enterprise_id from tb_enterprise where Enterprise_name=$_POST[enterprise_name]");

  //逐笔提取数据

	while ($row = mysql_fetch_array($result)) {
    echo $row['Enterprise_id'];
	}

	mysql_close($con);
}


?>
