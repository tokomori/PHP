<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $result = '';
    if (isset($_POST['calculate'])) {
        $a = isset($_POST['a']) ? (float)trim($_POST['a']) :'';
        $b = isset($_POST['b']) ? (float)trim($_POST['b']) :'';

        if ($a == '') {
            $result = 'Vui lòng nhập số a';
        }
        else if ($b == '') {
            $result = 'Vui lòng nhập số b';
        }
        else if ($a == 0) {
            $result = 'Bạn phải nhập số khác 0';
        }
        else {
            $result = 'Nghiệm của phương trình là: ' . (-$b / $a);
        }
    }
    ?>

    <h1>Giải phương trình bậc nhất</h1>
    <form action="" method="post">
        <input type="text" style="width: 70px" name="a" value="">x +
        <input type="text" style="width: 70px" name="b" value=""> = 0
            <br/> <br/>
        <input type="submit" name="calculate" value="Tính">
    </form>
    <?php echo $result ?>
</body>
</html>