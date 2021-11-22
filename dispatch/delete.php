<?php
    require 'conn.php';

    $userID = $_GET["id1"];
    $countryID = $_GET["id2"];

    $sql = "UPDATE 員工派駐資料表 SET 派駐狀態='離職' WHERE 員工身分證字號='$userID' AND 派駐國家代碼='$countryID'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        </meta>
    </head>
    <body bgcolor=#f0f8ff>
    更新成功！<br>
    <input type="button" value="返回" onclick="location.href='http://localhost/code/dispatch/dispatch.php'">
    </body>
</html>