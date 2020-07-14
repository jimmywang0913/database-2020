<html>
<head>
</head>
<body style="background-color:#003060">

<font size="8" color="red"><strong><center><?php echo 'welcome to DB Project';?></center></strong></font>
<hr color="#FF8000" size="5">
<font size="10" color="#02F78E"><center><?php echo '各場地選手名次';?></center></font><br>
<input type ="button" style="width:200;height:50px;font-size:20px;background-color:#9999CC;" onclick="history.back()" value="回到上一頁"></input>
<form id="form3" name="function1ans" method="post" action="func3ans.php">
<center><select name="year" style="width:180;height:80px;font-size:60px;background-color:#9999CC;">
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
</select></center><br>
<center><font size="6" color="#2894FF">請選擇一種場地</font><br>
<select name="surface" style "width:180;height:80px;font-size:60px;background-color:#9999CC;">
	<option value="Clay">紅土</option>
	<option value="Hard">硬地</option>
	<option value="Grass">草地</option>
</select></center><br>
<center><input type ="submit" style="width:90;height:40px;font-size:20px;background-color:#9999CC;" onclick="" value="確定"></input></center>
</form>
</body>
</html>