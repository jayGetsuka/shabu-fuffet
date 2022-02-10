<?php 

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<script src="https://kit.fontawesome.com/a81368914c.js"></script>';?>
</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="name-content">
        <i class="fas fa-map-marker-alt"></i>
        <span class="content-shabu">SHABU</span>
        <span class="content-buffet">BUFFET</span>
    </div>
    <div class="container">
        <div class="img">
            <img src="img/table-food.svg">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="img/employee-profile.svg">
                <h2 class="title">Employee</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="div">
                        <h5>Table Number</h5>
                        <input type="text" class="input" name="numbertb">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <?php echo '<script type="text/javascript" src="js/main.js"></script>' ?>

    <?php 

echo '
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
';
          
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['numbertb'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $numberTb = $_POST['numbertb'];


              if($username === "khajornsak" && $password === "0841234378") {
                  header('Location: menu.php');
              }else {
                  echo '<script>
                      swal({
                        title: "Oops...",
                        text: "Something went wrong!",
                        type: "warning"
                      }, function(){
                          window.location = "index.php";
                      });
                  </script>';
              }
        }
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username === "admin" && $password === "admin") {
                header('Location: product.php');
            }else {
                echo '<script>
                setTimeout(function() {
                    swal({
                      title: "Oops...",
                      text: "Username or Password Wrong !!!",
                      type: "error"
                    }, function(){
                        window.location = "index.php";
                    });
                }, 100);
                </script>';
            }

        }
        



    
    
    
    
    ?>
    
</body>

</html>