<?php
    $id_user = $_POST['id_user'];
    $nama_user = $_POST["nama_user"];
    $telp = $_POST["telp"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    include "connection.php";
    $input = mysqli_query($conn, "UPDATE user SET nama_user='".$nama_user."',telp='".$telp."',username='".$username."',password='".$password."', role='".$role."' where id_user='".$id_user."'") or die (mysqli_error($conn));

    if ($input) {
        echo "<script>alert('Success to Edit Employee');location.href='view_employee.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Edit Employee');location.href='view_employee.php';</script>";
    }
?>