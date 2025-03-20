<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán truyện</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"><img src="../images/logo.png" alt="" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline ml-auto" action="index.php?page=product" method="post"> 
            <div class="input-group"> 
                <input class="form-control" type="text" name="kyw" placeholder="Bạn muốn mua gì" aria-label="Search"> 
                <div class="input-group-append"> 
                    <input type="submit" name="search" value="Tìm kiếm">
                </div> 
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=product">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=viewcart">Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=signup">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>