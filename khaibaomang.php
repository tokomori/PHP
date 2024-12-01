<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng trong PHP</title>
</head>
<body>
     <?php
        //khai báo và tạo mảng
        $car = array('BWM', 'HonDa', 'Mec', 'Lamborghini');
        // sử dụng vòng lập foreach để lặp qua các phần tử mảng
        foreach ($car as $c)
        {
            echo "$c, ";
        }
        // sắp xếp các phần tử mảng
        sort($car);

        // in mảng duới dạng list
        echo "<ul>";
        foreach ($car as $b)
        {
            echo "<ul>$b</ul>";
        }
        echo "</ul>";
     ?>
</body>
</html>