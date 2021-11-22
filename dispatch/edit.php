<?php
    require 'conn.php';

    $userID = $_GET["id1"];
    $countryID = $_GET["id2"];
    
    echo "<form method='post'action='editor.php?getid1=$userID&&getid2=$countryID'>";

    $sql = "SELECT 員工姓名,到職日期,大使之姓名 FROM 員工派駐資料表 WHERE 員工身分證字號='$userID' AND 派駐國家代碼='$countryID'";
 
    echo $sql;

    $result = mysqli_query($conn,$sql);
    

    while($arr = mysqli_fetch_row($result))
    {
        $員工姓名=$arr[0];
        $到職日期=$arr[1];
        $大使之姓名=$arr[2];
    }

    mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
    <head>
        <h4 class="center grey-text">員工派駐資料表</h4>
    </head>
        <body bgcolor=#f0f8ff>
        
        員工姓名：<input type="text" name="員工姓名" value ="<?php echo $員工姓名?>"><br>
        到職日期：<input type="date" name="到職日期" value = "<?php echo $到職日期?>"><br>
        大使之姓名：<input type="text" name="大使之姓名" value = "<?php echo $大使之姓名?>"><br>

        <button type="submit">修改</button> 
        <input type="button" value="返回" onclick="location.href='http://localhost/code/dependent/dependent.php'">

    </body> 
     </form>
</html>