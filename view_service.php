<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>View Costumer</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Service <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                        <form method="POST" action="view_service.php" class="d-flex">
                            <input type="search" name="cari" class="form-control me-2" placeholder="Search">
                            <button class="btn btn-outline-primary" type="submit">Seacrh</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="row">
                <?php
                    include "connection.php";
                    if (isset($_POST['cari'])){
                        $cari = $_POST['cari'];
                        $query_paket = mysqli_query($conn,"SELECT * from paket where id_paket = '$cari' or nama_paket like '%$cari%' or merek like '$cari'");
                    }
                    else{
                        $query_paket = mysqli_query($conn, "SELECT * from paket");
                    }
                    // $qry_paket=mysqli_query($conn,"SELECT * from paket"); 
                    while($dt_paket=mysqli_fetch_array($query_paket)){ //fetcharray digunakan mengambil data berupa array
                ?>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-3">
                    <div class="card" >
                    <img src="img/<?=$dt_paket['img']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$dt_paket['nama_paket']?></h5>
                            <p class="card-text"><?=$dt_paket['jenis']?></p>
                            <p class="card-title">Rp <?=$dt_paket['harga']?>,-</p>
                            <?php
                                if($_SESSION['role']=='admin'){
                            ?>
                            <a href="edit_service.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-outline-primary">Edit</a>
                            <a href="delete_service.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure want to delete this service?')">Delete</a>
                            <?php
                                }else{

                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <?php
                }
                ?>
            </div>
        </div>
        
        </div>
        </div>
</div><br>
</body>
</html>