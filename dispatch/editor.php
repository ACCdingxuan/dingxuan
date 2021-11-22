<?php
    require 'conn.php';

    $id1 = $_GET["getid1"];
    $id2 = $_GET["getid2"];

    $sql = "UPDATE 員工派駐資料表 SET  員工姓名 = '".$_POST['員工姓名']."', 到職日期 = '".$_POST['到職日期']."', 大使之姓名 = '".$_POST['大使之姓名']."'WHERE 員工身分證字號='$id1' AND 派駐國家代碼='$id2' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)>0)
    {
        echo "更新成功";
    }
    elseif(mysqli_affected_rows($conn)==0)
    {
        echo "無資料更新";
    }
    else
    {
        echo "執行失敗 : " . mysqli_error($conn);
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        </meta>
    </head>
    <body bgcolor=#f0f8ff>

    <input type="button" value="返回" onclick="location.href='http://localhost/code/dispatch/dispatch.php'">
    </body>
</html>