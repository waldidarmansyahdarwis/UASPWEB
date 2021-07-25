<?php
    require 'function.php';


    //cek login tersambung atau tidak
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //mencocokan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
        //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);
    if ($hitung>0) {
        $_SESSION['log'] = 'True';
        header('location:index.php');
    }else{
        header('location:index.php');
    };
};

    if (!isset($_SESSION['log'])) {
        
    } else{
        header('location:index.php');
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
          <form method = "post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
        </div>     
    </body>
</html>