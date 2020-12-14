<?php /*a:1:{s:57:"D:\software\wamp64\www\blog\app\web\view\index\index.html";i:1607673043;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table>
        <tr>
            <td>姓名</td><td>手机号</td><td>密码</td>
        </tr>
        <tr>
            <td><?php echo htmlentities($adminer['name']); ?></td><td><?php echo htmlentities($adminer['phone']); ?></td><td><?php echo htmlentities($adminer['password']); ?></td>
        </tr>
    </table>
</body>
</html>