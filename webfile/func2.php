<html>
<head>
</head>
<body style="background-color:#003060">

<font size="8" color="red"><strong><center><?php echo 'welcome to DB Project';?></center></strong></font>
<hr color="#FF8000" size="5">
<font size="10" color="#02F78E"><center><?php echo '各表現排名';?></center></font><br>
<input type ="button" style="width:180;height:50px;font-size:20px;background-color:#9999CC;" onclick="history.back()" value="回到上一頁"></input>
<form id="form2" name="function1ans" method="post" action="func2ans.php">
<center><select name="year" style="width:180;height:80px;font-size:60px;background-color:#9999CC;">
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
</select></center><br>
<center><font size="6" color="#2894FF">請選擇一項表現</font><br>
<select name="pp" style "width:180;height:80px;font-size:60px;background-color:#9999CC;">
	<option value="w_ace">贏家ace</option>
	<option value="w_ef">贏家雙發失誤</option>
	<option value="w_1stIn">贏家一發進球</option>
	<option value="w_1stWon">贏家一發得分</option>
	<option value="w_2ndWon">贏家二發得分</option>
	<option value="w_bpSaved">贏家保破發</option>
	<option value="w_bpFaced">贏家破發</option>
	<option value="l_ace">輸家ace</option>
	<option value="l_ef">輸家雙發失誤</option>
	<option value="l_1stWon">輸家一發得分</option>
	<option value="l_1stIn">輸家一發進球</option>
	<option value="l_2ndWon">輸家二發得分</option>
	<option value="l_bpSaved">輸家保破發</option>
	<option value="l_bpFaced">輸家破發</option>
</select></center><br>
<center><input type ="submit" style="width:90;height:40px;font-size:20px;background-color:#9999CC;" onclick="" value="確定"></input></center>
</form>
</body>
</html>