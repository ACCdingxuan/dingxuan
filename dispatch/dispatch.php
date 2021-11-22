<?php

    require 'conn.php';

    //write query for all data
    $sql = "SELECT * FROM 員工派駐資料表 WHERE 派駐狀態='正常'";
    mysqli_query($conn, 'SET CHARACTER SET utf8');
    mysqli_query($conn,'SET collation_connection = ‘utf8_general_ci');

    //make query & get result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    /*$staff_info = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    //close connection*/
    $total_fields=mysqli_num_fields($result); // 取得欄位數

    $total_records=mysqli_num_rows($result);  // 取得記錄數
    mysqli_close($conn);


 
?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>員工外派資訊系統</title>
    </head>
    <input type="button" value="回首頁" style="background: #dcdcdc;outline: none;font-size:20px;"onclick="location.href='http://localhost/code/index.php'">
    <body bgcolor=#f0f8ff>
        <h1>員工派駐資料表</h1>
    <table border = '1'>
        <tr>
            <td align='center' valign="middle">員工身分證字號</td>
            <td align='center' valign="middle">派駐國家代碼</td>
            <td align='center' valign="middle">員工姓名</td>
            <td align='center' valign="middle">到職日期</td>
            <td align='center' valign="middle">大使之姓名</td>
            <td align='center' valign="middle">編輯</td>

        </tr>
        <?php
            while($row=mysqli_fetch_row($result))
            {
                echo "<tr>";
                for($i=0;$i<$total_fields-1; $i++)
                {
                    echo "<td>$row[$i]</td>";
                }
                echo "<td> <a = href='edit.php?id1=$row[0]&&id2=$row[1]'>修改</a> <a = href='delete.php?id1=$row[0]&&id2=$row[1]'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
        </table>
        <input type="button" value="新增" style="background: #dcdcdc;outline: none;font-size:20px;"onclick="location.href='http://localhost/code/dispatch/new.php'">
        <input type="button" value="查詢" style="background: #dcdcdc;outline: none;font-size:20px;"onclick="location.href='http://localhost/code/dispatch/search.html'"><br>
    </body>
</html>