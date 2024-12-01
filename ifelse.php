<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu lệnh If-Else</title>
</head>
<body>
<!-- nhập số và kiểm tra điều kiện, yêu cầu:
        - Số lớn hơn 10 và bé hơn 100-->
    <?php
        $kiemtra = '';
        if (isset($_POST['check'])) {
            $a = isset($_POST['so']) ? (float)trim($_POST['so']) :'';
            if ($a == '') {
                $kiemtra = 'Vui lòng nhập 1 số ';
            }else if ($a <= 9) {
                $kiemtra = 'Vui lòng nhập số từ 10 trở lên';
            }else if ($a > 100) {
                $kiemtra = 'Vui lòng nhập số không quá 100';
            }else {
                $kiemtra = 'Điều kiện đúng, số bạn nhập là: '. $a;
            }
        }
    
    ?>
    <h3>Nhập số ngẫu nhiên lớn hơn 10 và bé hơn 100</h3>
        <form action="" method="post">
            <input type="text" style="width: 30px" name="so" value="">
            <input type="submit" style="width: 70px" name="check" value="Kiểm tra">
        </form>
        <?php echo $kiemtra; ?>
</body>
</html>