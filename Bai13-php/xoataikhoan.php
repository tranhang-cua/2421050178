<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM 'mguoi_dung' WHERE id = '$id'";
    mysqli_query($conn,$sql);
    header("Location: index.php?page-layout=taikhoan");
?>