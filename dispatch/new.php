<!DOCTYPE html>
<html>
    <head>
        <h1>新增檔案</h1>
        <meta charset = utf-8>
        </meta>
    </head>
    <body bgcolor=#f0f8ff>
    <form method="post" action="receiver.php">
    <?php echo '員工身分證字號：'; ?>
    <input type="text" name="員工身分證字號" placeholder="輸入員工身分證字號"><br/>
    <?php echo '派駐國家代碼：'; ?>
    <input type="text" name="派駐國家代碼" placeholder="輸入派駐國家代碼"><br/>
    <?php echo '員工姓名：'; ?>
    <input type="text" name="員工姓名" placeholder="輸入員工姓名"><br/>
    <?php echo '到職日期：'; ?>
    <input type="date" name="到職日期"><br/>
    <?php echo '大使(代表)之姓名：'; ?>
    <input type="text" name="大使(代表)之姓名" placeholder="輸入大使(代表)之姓名"><br/>
    <button type="submit">新增</button>
    <input type="button" value='返回' onclick="location.href='http://localhost/code/dispatch/dispatch.php'">
</form>
    </body>
</html>

