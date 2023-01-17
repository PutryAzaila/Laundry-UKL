<?php
 if($_GET['id_costumer']){
    include "connection.php";
    $qry_hapus=mysqli_query($conn,"DELETE from costumer where id_costumer='".$_GET['id_costumer']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete Costumer');
        location.href='view_costumer.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete Member');
        location.href='view_costumer.php';</script>";
    }
 }
?>