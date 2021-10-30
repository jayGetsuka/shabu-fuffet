<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart</title>
</head>

<body>
    <div class="name-content">
        <i class="fas fa-map-marker-alt"></i>
        <span class="content-shabu">SHABU</span>
        <span class="content-buffet">BUFFET</span>
    </div>
    <nav>
        <a href="">Seafood</a>
        <a href="">Beef</a>
        <a href="">Pork</a>
        <a href="">Vegetable</a>
        <a href="">Snack</a>
    </nav>
    <input type="search" name="" id="" placeholder="ค้นหาชื่ออาหาร...">
    <button class="search">Search</button>

    <div class="cart-icon">
        <a href="logout.php"><i class="fas fa-sign-out-alt" style="color:#fff;margin-left:10px;"></i></a>
    </div>



    <div class="content">
        <h2 class="header-content">CART</h2>
        <div class="box-order">
            <img src="https://images.unsplash.com/photo-1573699209155-e1364b8746a5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTYzNTIxMzY5NQ&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080" alt="">
            <p class="name-topic">ปูม้า</p>
            <p class="count-order">จำนวน : 6</p>
            <form action="">
                <button class="btn-close"><i class="fas fa-times-circle"></i></button>
            </form>



        </div>

        <div class="btn-order">
            <span>
            <button class="btn-red" onclick="BacktoMenu();"><i class="fas fa-undo-alt"></i><span>BACK TO MENU PAGE</span></button>
            <button class="btn-green" onclick="CheckOrder();"><i class="fas fa-paper-plane"></i><span>ORDER</span></button>


            </span>

        </div>

    </div>

    <script>
        function CheckOrder() {
            swal({
                title: "Successfully",
                text: "Ordered",
                type: "success"
            }, function() {
                window.location = "menu.php";
            })
        }
        function BacktoMenu() {
            window.location = menu.php;
        }
    </script>

</body>

</html>