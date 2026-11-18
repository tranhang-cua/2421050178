<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tài khoản</h1>
    <php?
         $sql = "select * from nguoi_dung";
         $result = mysqli_query($conn,$sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>email</th> 
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
        ?>
         <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_dang_nhap'] ?> </td>
            <td><?php echo $row['email'] ?></td> 
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['so_dien_thoai'] ?></td>
            <td><?php echo $row['ngay_sinh'] ?></td>
            <td><?php echo $row['gioi_tinh'] ?></td>
        </tr>
    </table>
<?php
            }
?>
</body>
</html>