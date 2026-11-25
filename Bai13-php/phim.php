<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width: 100%;
    }
    tr, th, td{
        border: 1px solid black;
    }
    .dangki{
        background-color: pink;
        border: 1px solid black;
        border-radius: 10px;
    }
    .capnhat{
        background-color: green;

    }
    .xoa{
        background-color: red;
    }
</style>
<body>
    <h1>Phim</h1>
    <div style="margin:20px 0;">
        <a class="btn-add" href="index.php?page_layout=themphim">Đăng kí phim</a>
    </div>
<?php
    $sql = "select * from nguoi_dung";
    $result = mysqli_query($conn,$sql);
    
?>
<table>
    <tr>
        <th>ID</th>
        <th>Tên phim</th>
        <th>quốc gia</th>
        <th>Email</th>
        <th>Đạo diễn</th>
        <th>Năm</th>
        <th>Dộ tuổi</th>
        <th>Mô tả</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_phim']?></td>
        <td><?php echo $row['quoc_gia']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dạo_dien']?></td>
        <td><?php echo $row['do_tuoi']?></td>
        <td><?php echo $row['mo_ta']?></td>
        <td>
            <a class="capnhat" href="index.php?page_layuot=capnhatphim&id=<?php echo $row['id']?>">Cập nhật</a>
            <a class="xoa" href="index.php?page_layuot=xoaphim&id=<?php echo $row['id']?>">Xóa</a>
        </td>
    </tr>

<?php
        }
?>
</table>
</body>
</html>