<?php
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */
    include_once "./db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img{
            width: 500px;
            border: 8px solid white;
            box-shadow: 0px 0px 5px black;
            margin: 10px;
        }
        table{
            margin: 0 auto;
        }
        td{
            min-width: 100px;
            text-align: center;
        }
    </style>
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
<?php
   $sql="select * from `images`";
   $imgs=$pdo->query($sql)->fetchAll();
?>
<table>
    <tr>
        <td>序號</td>
        <td>縮圖</td>
        <td>檔名</td>
        <td>描述</td>
        <td>類別</td>
        <td>大小</td>
        <td>操作</td>
    </tr>
    <?php
        foreach($imgs as $idx =>$img){
    ?>
    <tr>
        <td><?=$idx+1?></td>
        <td><img src='./img/<?=$img['img']?>'></td>
        <td><?=$img['img']?></td>
        <td><?=$img['desc']?></td>
        <td>
            <?php
                switch($img['type']){
                    case "image/png":
                        echo "png";
                    break;
                    case "image/jpeg":
                        echo "jpg";
                    break;
                    case "image/bmp":
                        echo "bmp";
                    break;
                    case "image/gif":
                        echo "gif";
                    break;
                }
            ?>
        </td>
        <td>
            <?=round($img['size']/1024,2) ."KB"?>
        </td>
        <td>
            <button>編輯</button>
            <button onclick="location.href='./api/del_file.php?id=<?=$img['id']?>'">刪除</button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>



<!----建立一個連結來查看上傳後的圖檔---->  


</body>
</html>