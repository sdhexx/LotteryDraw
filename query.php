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


//��ѯnews��Ľ��
$result = mysql_query("select a.Phone_nbr,a.Cust_name,b.Award_name,b.Award_image,a.Convert_date,c.Enterprise_name from tb_cust_award a,tb_award_info b,tb_enterprise c where b.Enterprise_id=c.Enterprise_id and a.Enterprise_id=b.Enterprise_id and a.Award_id=b.Award_id and a.Phone_nbr=$_POST[phone_nbr]");

  //�����ȡ����

while ($row = mysql_fetch_array($result)) {
/*
  //     ÿ����¼�ŵ�һ����������ȥ
   $arr[$n++] = array("Phone_nbr" => $row['Phone_nbr'],
                  "Cust_name" => $row['Cust_name'],
                  "Award_name" => $row['Award_name'],
                  "Convert_date" => $row['Convert_date'],
                  "Enterprise_name" => $row['Enterprise_name']
               );
 */
 	echo '{"Phone_nbr":"' . $row['Phone_nbr'] . '","Cust_name":"'. $row['Cust_name'] . '","Award_name":"' . $row['Award_name'] . '","Award_image":"' . $row['Award_image'] . '","Convert_date":"' . $row['Convert_date'] . '","Enterprise_name":"' . $row['Enterprise_name'] . '"}';
 }

 //����ת��ΪJSON�ַ����������
// echo json_encode($arr, JSON_UNESCAPED_UNICODE);

mysql_close($con);
?>
