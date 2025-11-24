<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <?php
        //1. Cú pháp in ra màn hình
        echo"hello world! <br>";

        echo"PHP <br>";

        //2. Biến
        $ten = "Danh";
        $tuoi = "21";

        echo "Xin chào " . $ten . " " . $tuoi . "Tuổi";
    
        //3. Hằng
        define("soPi", "3.14");
        echo soPi . "<br>";
        //4. Phân biệt '' và ""
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";
        //5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten,"a") . "<br>";
        #5.4 Thay thế kí tự trong chuỗi 
        echo str_replace("Danh", "Thuận", $ten). "<br>";

        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 3;

        //+ - * / %
        # so sánh == != > < >= <= ===
        // echo $soThuNhat %= $soThuHai;

        //7. Câu điều kiện
        // if("Điều kiện")
    
    $tong = $soThuNhat + $soThuHai;
    
    // Kiểm tra điều kiện và hiển thị kết quả
    if ($tong < 15) {
        echo "Tổng là $tong " . "nhỏ hơn 15";
    } elseif ($tong == 15) {
        echo "Tổng là $tong";
    } else {
        echo "Tổng là $tong";
    }
    //8. Switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break;
        }
        //9. for
        for ($i = 0 ; $i < 100; $i++ ){
            echo $i . "<br>";
        }
    ?>
</body>
</html>