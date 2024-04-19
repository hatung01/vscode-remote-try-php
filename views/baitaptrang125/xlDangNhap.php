<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập hệ thống</h2>
    <form method="POST" action="dangnhap.php">
        <div>
            <label for="username">Tên tài khoản:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <br>
        <div>
            <label for="password">Mật khẩu:</label>
            <input style="margin-left: 27px" type="password" id="password" name="password" required>
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="Đăng nhập">
        </div>
    </form>
</body>
</html>