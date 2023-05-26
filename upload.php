<?php
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1 class="header">檔案上傳練習</h1>

 <form action="./api/upload.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="img">上傳檔案：</label>
        <input type="file" name="img" id="img">
    </div>
    <div>
        <label for="desc">描述：</label>
        <input type="text" name="desc" id="desc">
    </div>
    <div>
        <input type="submit" value="上傳">
    </div>
 </form>
 <!----建立你的表單及設定編碼----->





<!----建立一個連結來查看上傳後的圖檔---->  


</body>
</html>