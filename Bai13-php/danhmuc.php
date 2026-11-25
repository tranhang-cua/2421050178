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
    <h1>Thể loại</h1>
    <a class="dangki" href="index.php?page_layout=dangki">Đăng kí</a>
<?php
    $sql = "select * from the_loai";
    $result = mysqli_query($conn,$sql);
    
?>
<table>
    <tr>
        <th>ID</th>
        <th>Tên thể loại</th>
        <th>Chức năng</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_the_loai']?></td>
        <td>
            <a class="capnhat" href="index.php?page-layuot=capnhatdanhmuc&id=<?php echo $row['id']?>">Cập nhật</a>
            <a class="xoa" href="index.php?page-layuot=xoadanhmuc&id=<?php echo $row['id']?>">Xóa</a>
        </td>
    </tr>

<?php
        }
?>
</table>
</body>
</html>