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



$sql = "drop table tb_cust_award";
mysql_query($sql,$con);

$sql = "CREATE TABLE tb_cust_award (Phone_nbr bigint,Cust_name varchar(20),Enterprise_id smallint,Award_id smallint,Convert_date datetime)";
mysql_query($sql,$con);

$sql = "CREATE index i_tb_cust_award on tb_cust_award(Phone_nbr)";
mysql_query($sql,$con);

echo "CREATE TABLE tb_cust_award ok";
$sql = "drop table tb_enterprise";
mysql_query($sql,$con);

$sql = "CREATE TABLE tb_enterprise (Enterprise_id smallint,Enterprise_name varchar(60))";
mysql_query($sql,$con);
$sql = "insert into tb_enterprise values (1001,'美的')";
mysql_query($sql,$con);
$sql = "insert into tb_enterprise values (1002,'碧桂园')";
mysql_query($sql,$con);

echo "CREATE TABLE tb_enterprise ok<br/>";


$sql = "drop table tb_award_info";
mysql_query($sql,$con);

$sql = "CREATE TABLE tb_award_info (Enterprise_id smallint,Award_id smallint,Award_name varchar(50),Award_image varchar(50),Repeat_count smallint)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,0,'无奖品','',2)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,11,'1元红包','uim_card1.jpg',6)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,12,'5元话费','uim_card2.jpg',4)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,13,'6元红包','red_packet.png',3)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,14,'8元红包','red_packet.png',2)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,15,'10元话费','',1)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1001,16,'10元红包','red_packet.png',1)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1002,11,'8元红包','red_packet.png',4)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1002,12,'1元话费','',6)";
mysql_query($sql,$con);
$sql = "insert into tb_award_info values (1002,13,'10元红包','red_packet.png',2)";
mysql_query($sql,$con);

echo "CREATE TABLE tb_award_info ok<br/>";

mysql_close($con);
?>
