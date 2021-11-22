<?php
    require 'conn.php';

    //write query for all data
    $sql = 'SELECT * FROM 員工基本資料表';
    mysqli_query($conn, 'SET CHARACTER SET utf8');
    mysqli_query($conn,'SET collation_connection = ‘utf8_general_ci');

    //make query & get result
    $result = mysqli_query($conn, $sql);

    $query = "INSERT INTO `員工派駐資料表` (`員工身分證字號`, `派駐國家代碼`, `員工姓名`, `到職日期`, `大使(代表)之姓名`) VALUES ('".$_POST['員工身分證字號']."','".$_POST['派駐國家代碼']."','".$_POST['員工姓名']."','".$_POST['到職日期']."','".$_POST['大使(代表)之姓名']."')";

    $insert = mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0)
            {
              echo '執行成功！<br>';
            }
            elseif(mysqli_affected_rows($conn) == 0)
            {
              echo "無資料新增";
            }
            else
            {
              echo  "執行失敗，錯誤訊息：" . mysqli_error($conn);
            }

    //fetch the resulting rows as an array
    /*$staff_info = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    //close connection*/
    //$total_fields=mysqli_num_fields($result); // 取得欄位數

    //$total_records=mysqli_num_rows($result);  // 取得記錄數
    mysqli_close($conn);

    //mysqli_query('set names utf8');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        </meta>
    </head>
    <body  bgcolor=#f0f8ff>

    <input type="button" value="返回" onclick="location.href='http://localhost/code/dispatch/dispatch.php'">
    </body>
</html>