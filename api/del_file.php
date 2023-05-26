<?php
    include_once "../db.php";
    $file=$pdo->query("select `img` from `images` where `id` = '{$_GET['id']}'")->fetchColumn();
    unlink("../img/".$file);
    $pdo->exec("delete from `images` where `id` = '{$_GET['id']}'");
    header("location:../upload.php");
?>