<?php
    //Nội dung php đặt ở vị trí này
    echo "Hello World";
    //Biến: $Tên biên = gtri;
    $hoTen = "Thu Hằng";
    $tuoi = 20;

    //Để nối chuỗi trong php dung dấu "."
    echo $hoTen . $tuoi . "<br>";

    //strlen() Độ dài chuỗi
    echo strlen($hoTen) . "<br>";

    //Đếm số từ
    echo str_word_count($hoTen) . "<br>";

    //Tìm kiếm kí tự trong chuỗi
    echo strpos($hoTen, "n") . "<br>";

    //Thay thê skis tự trong chuỗi
    echo str_replace("Hằng", "Huyền", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    //Phép cộng
    echo $soThuNhat + $soThuHai . "<br>";

    //Phép trừ
    echo $soThuNhat - $soThuHai . "<br>";

    //Phép nhân
    echo $soThuNhat * $soThuHai . "<br>";

    //Phép chia
    echo $soThuNhat / $soThuHai . "<br>";

    //Toán tử gán 
    // # += *= /= %=
    $soThuNhat += $soThuHai;
    echo $soThuNhat . "<br>";

    //Toán tử so sánh: == ; != ; > ; < ; >= ; <= ; ===
    echo $soThuNhat == $soThuHai . "<br>";

    //câu điều kiện
    // if ("Điều kiện") {
    //     logic
    // } else {
    //     logic
    // }
   

    // Kiểm tra điều kiện và in kết quả
    if ($soThuNhat + $soThuHai < 15) {
        echo "<15";
    } elseif ($soThuNhat + $soThuHai == 15) {
        echo "=15";
    } else {
        echo "lớn hơn 15";
    }

    //wiitch case
    $color = "red";
    switch($color){
        case "red";
            echo "<br>";
            echo "IS RED";
            break;

        case "red";
            echo "<br>";
            echo "IS BLUE";
            break;

        default:
            echo "<br>";
            echo "no color";
            break;
    }

    // for 
    for ($i = 0; $i < 100 ; $i++){
        echo $i . "<br>";
    }

    //Mảng
    echo "<br>";

    $mang = ["Hằng", "Nhat Anh", "Huyền"];
    //Đếm phần tử
    echo count ($mang) . "<br>";
    echo $mang[1] . "<br>";

    $mang[] = "Huy";
    print_r($mang);

    echo "<br>";
    unset($mang[3]);
    print_r($mang);
?>