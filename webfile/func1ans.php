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
	$name=$_POST["name"];
	$file = fopen("searching_history",a);
	$time=time();
	fwrite($file,"time:$time ");
	fwrite($file,"func1(year:$year,name:$name)\n");
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
	//echo "<br>";
	echo $year;
	echo "<br>";
	$sql ="select name, hand, age, ioc, avg(winner_rank) as avg_rank from
 ((select winner_id as id, winner_name as name, winner_hand as hand, winner_age as age, winner_ioc as ioc
  from $t1
  where winner_name = '$name')
 union
 (select loser_id as id, loser_name as name, loser_hand as hand, loser_age as age, loser_ioc as ioc
  from $t1
  where loser_name = '$name')
 order by age desc limit 1) as i,
 $t2 as m
 where i.id = m.winner_id
 group by name, hand, age, ioc;";
    $result=$db->query($sql);
	while($row = $result->fetch(PDO::FETCH_NUM)){
        echo "name:\t $row[0] <br>hand:\t $row[1]<br>age:\t $row[2] <br> country:\t $row[3] <br> rank: $row[4]";
        echo  "<hr>";
    }
?>
<input type ="button" style="width:180;height:50px;font-size:20px;background-color:#9999CC;" onclick="history.back()" value="回到上一頁"></input>
</body>
</html>
