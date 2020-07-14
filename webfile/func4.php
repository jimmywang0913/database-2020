
<html>
<head>
</head>
<body style="background-color:#003060">

<font size="8" color="red"><strong><center><?php echo 'welcome to DB Project';?></center></strong></font>
<hr color="#FF8000" size="5">
<font size="10" color="#02F78E"><center><?php echo '世界各國的選手表現排名';?></center></font><br>
<input type ="button" style="width:200;height:50px;font-size:20px;background-color:#9999CC;" onclick="history.back()" value="回到上一頁"></input>
<form id="form4" name="function1ans" method="post" action="func4ans.php">
<center><select name="year" style="width:180;height:80px;font-size:60px;background-color:#9999CC;">
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
</select></center><br>
<center>
<font size="6" color="#2894FF">請輸入國家代碼:</font>
<?php
	$dbms='mysql';     //数据库类型
    $host='127.0.0.1'; //数据库主机名
    $dbName='db';    //使用的数据库
    $user='root';      //数据库连接用户名
    $pass='Jimmy880913@';          //对应的密码
    $dsn="$dbms:host=$host;dbname=$dbName";
	$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
	echo "<select name='country'>";
    $sql ="select * from
 ((select distinct(winner_ioc)
 from match_2015_player)
union
 (select distinct(winner_ioc)
 from match_2016_player)
union
 (select distinct(winner_ioc)
 from match_2017_player)
union
 (select distinct(winner_ioc)
 from match_2018_player)
union
 (select distinct(winner_ioc)
 from match_2019_player)) as tmp order by winner_ioc;";
    $result=$db->query($sql);
    while($row = $result->fetch(PDO::FETCH_NUM)){
        echo "<option>$row[0]</option><br>";
    }
    echo "</select>";
?>
<br>
<center>
<input type ="submit" style="width:90;height:40px;font-size:25px;background-color:#9999CC;" name="botton" id="button" value="確定">
</input>
</center>
</form>
</body>
</html>