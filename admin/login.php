<?php
    session_start();
    include('modules/head.php');
    include ('db/database.php');
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql ="SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $user = executeSingleResult($sql);

        if ($user == 0){
            header('location: login.php');
            echo '<script>alert("Sai email hoặc mật khẩu!")</script>';
        }
        else
        {
            echo '<script>alert("Đăng nhập thành công!!!")</script>';
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];
            if ($user['role'] == 1){
                $_SESSION['role'] = 'admin';
                header('location: index.php');
            }
            else{
                $_SESSION['role'] = 'user';
                header('location: login.php');
            }
        }
    }
?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h1><b>Sign in</b></h1>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                            </div>
                    </div>
                    <div class="input-group mb-3">
                        <button name="login" type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
    include('modules/footer.php');
?>


