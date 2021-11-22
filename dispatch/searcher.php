<?php
require 'conn.php';

$sql = "SELECT * FROM 員工派駐資料表 WHERE 員工身分證字號 LIKE '%$_POST[員工身分證字號]%'";


$result = mysqli_query($conn, $sql);

$total_fields=mysqli_num_fields($result); // 取得欄位數

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body bgcolor=#f0f8ff>
        <h1>查詢結果</h1>
    <table border = '1'>
        <tr>
            <td>員工身分證字號</td>
            <td>派駐國家代碼</td>
            <td>員工姓名</td>
            <td>到職日期</td>
            <td>大使之姓名</td>
        </tr>
        
        <?php
            while($row=mysqli_fetch_row($result))
            {
                echo "<tr>";
                for($i=0;$i<$total_fields-1; $i++)
                {
                    echo "<td>$row[$i]</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>
        <input type="button" value="返回" onclick="location.href='http://localhost/code/dispatch/dispatch.php'">
    </body>
</html>