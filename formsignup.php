<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng kí</title>
</head>
<body>
    <h3>Đăng kí</h3>
    <form method="post">
        <p>Họ và tên: <input type="text" style="width: 170px; border: 10px; color: #fff" name="ten" value=""></p>
        <br/><br/>
        <p>Email: <input type="email" style="width: 170px; border: 10px" name="email" value=""></p>
        <br/><br/>
        <p>Số điện thoại: <input type="phone" style="width: 170px; border: 10px" name="phone" value=""></p>
        <br/><br/>
        <p>Mật khẩu: <input type="password" style="width: 170px; border: 10px" name="pwd" value=""></p>
        <br/><br/>
        <p>Giới tính: Nam <input type="radio" name="genner" value="Nam">   Nữ <input type="radio" name="genner" value="Nữ"></p>
        <br/><br/>
        <p>Thành phố: <select name="city" sytle="width: 170px; border: 10px">
            <option value="Hà Nội">Hà Nội</option>
            <option value="Đồng Nai">Đồng Nai</option>
            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
            <option value="Nam Định">Nam Định</option>
            <option value="Hải Phòng">Hải Phòng</option>
            <option value="Thừa Thiên Huế">Huế</option>
        </select></p>
        <br/><br/>
        <button type="submit">Đăng kí</button>
    </form>
                <?php if(isset($_POST["ten"])) {echo "Họ và tên: " . $_POST["ten"];} ?><br/><br/>
                <?php if(isset($_POST["email"])) {echo "Email: " . $_POST["email"];} ?><br/><br/>
                <?php if(isset($_POST["phone"])) {echo "Số điện thoại: " . $_POST["phone"];} ?><br/><br/>
                <?php if(isset($_POST["pwd"])) {echo "Mật khẩu: " . $_POST["pwd"];} ?><br/>
                <p>Giới tính: <?php if(isset($_POST["genner"])) {echo $_POST["genner"];} ?></p>
                <?php if(isset($_POST["city"])) {echo "Thành phố: " . $_POST["city"];} ?><br/><br/>
</body>
</html>