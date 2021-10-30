<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/product.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap 5.x or 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
 
 <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
  
 <!-- alternatively you can use the font awesome icon library if using with `fas` theme (or Bootstrap 4.x) by uncommenting below. -->
 <!-- link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous" -->
  
 <!-- the fileinput plugin styling CSS file -->
 <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  
 <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
 <!-- link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
  
 <!-- the jQuery Library -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  
 <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
     wish to resize images before upload. This must be loaded before fileinput.min.js -->
 <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>
  
 <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
     This must be loaded before fileinput.min.js -->
 <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>
  
 <!-- bootstrap.bundle.min.js below is needed if you wish to zoom and preview file content in a detail modal
     dialog. bootstrap 5.x or 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
 <!-- the main fileinput plugin script JS file -->
 <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>
  
 <!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`). Uncomment if needed. -->
 <!-- script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/themes/fas/theme.min.js"></script -->
  
 <!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
 <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/locales/LANG.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ModifyMenu Page</title>
</head>
<body>
<div class="container">
        <nav>
            <a href="#" class="logo"><i class="fas fa-map-marker-alt"></i> <span >Shabu</span><span style="color:#58D68D;">buffet</span></a>
            <a href="product.php">เพิ่มเมนูอาหาร</a>
            <a href="edit-menu.php">แก้ไขเมนูอาหาร</a>
            <a href="delete-menu.php">ลบเมนูอาหาร</a>
            <a href="">ออเดอร์</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>

    <div class="form-input">

    <form>
        <div class="size-file">

        <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true" value="ใบพาย.jpg">

        </div>

        <div class="size-input-nfood">
            <span>
            <label for="food-name"> ชื่อเมนู </label>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-utensils"></i></span>
            <input type="text" class="form-control" placeholder="Food name" aria-label="Username" aria-describedby="addon-wrapping" value="เนื้อใบพาย">
        </div>

            </span>

            <div class="select-items">
            <label for="food-name"> ประเภทเมนู </label>
            <select class="form-select" aria-label="Default select example">
                    <option>เลือกประเภทเมนู</option>
                    <option value="1" selected>เนื้อ</option>
                    <option value="2">เนื้อหมู<i class="fas fa-bacon"></i></option>
                    <option value="3">ผัก</option>
                    <option value="3">ของกินเล่น</option>

            </select>
                
            </div>
            <div class="btn-add-menu">
                <button class="btn-primary"><i class="fas fa-file-signature"></i> <span>แก้ไข</span></button>
            </div>
            

            
            
        </div>
        

    </form>


    </div>

    <script>
        function CheckModify() {
            swal({
                title: "Success",
                text: "Modify food menu success.",
                icon: "success"

            })
        }
    </script>

</body>
</html>