<?php 
       
       session_start();

       session_destroy();

       echo '
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
';


                  echo '
                        <script>
                        setTimeout(function() {
                            swal({
                                title: "Logout",
                                text: "See you later.",
                                type: "success"
                            }, 
                            function() {
                                window.location = "index.php";
                            })
                        }, 1000);
                        </script>
                        ';






?>