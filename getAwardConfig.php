<?php
$con = mysql_connect("localhost","mysky","01952030");
mysql_query("SET NAMES 'gb2313'");
mysql_query("SET CHARACTER SET 'gb2313'");
mysql_query("SET CHARACTER_SET_RESULT=utf8");
   
if ($con)
{
	mysql_select_db("ywzc", $con);

	$n = 0;

	$result = mysql_query("select * from tb_award_info where Enterprise_id = $_POST[enterprise_id]");

  //�����ȡ����

	while ($row = mysql_fetch_array($result)) {

  //     ÿ����¼�ŵ�һ����������ȥ
   	$arr[$n++] = array("Award_id" => $row['Award_id'],
                  "Award_name" => $row['Award_name'],
                  "Award_image" => $row['Award_image'],
                  "Repeat_count" => $row['Repeat_count']                
               );
	}

 	//����ת��ΪJSON�ַ����������
	echo json_encode($arr, JSON_UNESCAPED_UNICODE);


	mysql_close($con);
//} else {
//  die('Could not connect: ' . mysql_error());
}


?>
