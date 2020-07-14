<html>
<head>
</head>
<body>
<?php
$filename = "searching_history";
//判斷是否有該檔案
if(file_exists($filename)){
    $file = fopen($filename, "r");
    if($file != NULL){
        //當檔案未執行到最後一筆，迴圈繼續執行(fgets一次抓一行)
        while (!feof($file)) {
			unset($str);
            $str .= fgets($file);
			echo $str;
			echo "<br>";
        }
        fclose($file);
    }
}

?>
</body>
</html>