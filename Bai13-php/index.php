<?php 
    ob_start(); // Bật bộ đệm đầu ra giúp các trang con dùng header("Location: ...") không bị lỗi
    session_start();
    
    if(!isset($_SESSION['dangnhap'])){
        header("Location: dangnhap.php");
        exit(); // Luôn dùng exit() sau header Location
    }
    
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị hệ thống</title>
    <style>
        ul {
            list-style: none;
            display: flex;
            gap: 10px;
            background-color: pink;
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=danhmuc">Danh mục</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
            </ul>
        </nav>
    </header>

    <?php 
        if(isset($_GET['page_layout'])){
            $page = $_GET['page_layout'];
            switch($page){
                case 'trangchu':
                    include 'trangchu.php';
                    break;
                case 'taikhoan':
                    include 'taikhoan.php';
                    break;
                case 'dangki':
                    include 'dangki.php';
                    break;
                case 'capnhat':
                    include 'capnhat.php';
                    break;
                case 'xoataikhoan':
                    include 'xoataikhoan.php';
                    break;
                case 'danhmuc':
                    include 'danhmuc.php';
                    break;
                case 'phim':
                    include 'phim.php';
                    break;
                case 'capnhatdanhmuc':
                    include 'capnhatdanhmuc.php';
                    break;
                case 'themdanhmuc':
                    include 'themdanhmuc.php';
                    break;
                case 'xoadanhmuc':
                    include 'xoadanhmuc.php';
                    break;
            }
        } 
    ?>
</body>
</html>
