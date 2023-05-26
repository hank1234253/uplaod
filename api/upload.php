<?php
include_once "../db.php";
echo "<pre>";
print_r($_FILES['img']);
echo "</pre>";
if($_FILES['img']['error']==0){
    $sql="insert into `images` (`img`,`desc`,`type`,`size`) values ('{$_FILES['img']['name']}','{$_POST['desc']}','{$_FILES['img']['type']}','{$_FILES['img']['size']}')";
    echo $sql;
    $pdo->exec($sql);
    $name=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/{$name}");
    header("location:../upload.php");
}
?>