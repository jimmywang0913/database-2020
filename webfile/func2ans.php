<html>
<head>
</head>
<body>
<?php
    $dbms='mysql';     //数据库类型
    $host='127.0.0.1'; //数据库主机名
    $dbName='db';    //使用的数据库
    $user='root';      //数据库连接用户名
    $pass='Jimmy880913@';          //对应的密码
    $dsn="$dbms:host=$host;dbname=$dbName";
	$year=$_POST["year"];
	$pp=$_POST["pp"];
	$file = fopen("searching_history",a);
	$time=time();
	fwrite($file,"time:$time ");
	fwrite($file,"func2(year:$year,表現:$pp)\n");
	fclose($file);
	if($year=="2019"){
	$t1='match_2019_player';
	$t2='match_2019_match';
}
	if($year=="2018"){
	$t1='match_2018_player';
	$t2='match_2018_match';
}
if($year=="2017"){
	$t1='match_2017_player';
	$t2='match_2017_match';
}
if($year=="2016"){
	$t1='match_2016_player';
	$t2='match_2016_match';
}
if($year=="2015"){
	$t1='match_2015_player';
	$t2='match_2015_match';
}
	$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
	if($db==0){
		echo"connecting error.";
	}
	echo $year;
	echo "<br>";
	$sql ="select p.winner_name, sum($pp)/count(p.winner_name) as $pp
from $t1 as p, $t2 as m
where p.winner_id = m.winner_id
group by p.winner_name
order by sum($pp)/count(p.winner_name) desc limit 20;";
    $result=$db->query($sql);
	$num=1;
	while($row = $result->fetch(PDO::FETCH_NUM)){
		echo "$num. ";
        echo $row[0];echo "<br>";$num++;
    }
?>
<input type ="button" style="width:180;height:50px;font-size:20px;background-color:#9999CC;" onclick="history.back()" value="回到上一頁"></input>
</body>
</html>