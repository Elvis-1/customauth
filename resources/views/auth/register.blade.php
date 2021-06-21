<?php 
// session_start();
// if(isset($_SESSION['adminsession']) ) {
//     header("Location: dashboard.php");
//     exit;
//     }

// include_once '_includes/functions.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Auth</title>

    <!-- Bootstrap Core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!--Custom styles fir this template-->
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/scrollbar.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/sidebar.css">


    <!-- favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='./Virtual fit admin assets/favicon.png'>
</head>

<body onload="renderDate()">
    <div class="" id="wrapper">
        <!--Page content-->

        <div class="showcase">
            <div class="row">
                <div class="col-md-4">
                    <div class="left">
                    <div style="width:100px">
                        <img  style="width:100%; border-radius:50px" src="image/el.jpg">
                    </div>    
                        <h3><i>IFNOTGOD</i> <br>Custom Auth for everyone</h3>
                   </div>
                </div>

                <div class="col-md-8">
                    <div id="login">
                        
                        <div class="container">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12" style="height:auto">
                                    <div class="results">
                                    @if(Session::get('success'))
                                        <div class="alert alert-success">
                                           {{Session::get('success')}}
                                        </div>
                                    @endif    

                                     @if(Session::get('failed'))
                                        <div class="alert alert-danger">
                                           {{Session::get('failed')}}
                                        </div>
                                    @endif
                                    
                                    </div>

                                        <form id="login-form" class="form" action="{{ route('auth.create') }}" method="post">
                                        @csrf
                                            <h6 class=" text-info text-dark">Sign up to <br> The Virtual Fit Admin Portal </h6>
                                            <div class="form-group">
                                                <label for="username" class="text-info">Name:</label><br>
                                                <input type="text" name="name" id="username" class="form-control" style="border-radius: 7px;" value="{{old('name')}}">
                                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="text-info">Email:</label><br>
                                                <input type="email" name="email" id="username" class="form-control" style="border-radius: 7px;" value="{{old('email')}}">
                                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="text-info">Password:</label><br>
                                                <input type="password" name="password" id="password" class="form-control" style="border-radius: 7px;">
                                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="remember-me" class="text-info">
                                                    <span><input id="remember-me" name="remember-me" type="checkbox"></span>
                                                    <span>Remember me</span> 
                                                    </label><br>
                                                <input type="submit" name="login_submit" class="btn btn-info btn-md px-4" style="border-radius: 7px;"
                                                    value="Login">
                                            </div>
                                            <div id="register-link" class="text-right">
                                                <a href="#" class="text-info">Forgot Password</a>
                                            </div>
                                            
                                        </form>
                                        <div id="register-link" class="registerhere">

                                            <a href="login" class="text-info">I already have an account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    





    <?php 

// if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
    
//       $username = $_COOKIE['user'];
//       $password = $_COOKIE['password'];
//     echo"
//     <script>
//     document.getElementById('username').value = '$username';
//     document.getElementById('password').value = '$password';
//     </script>
//     ";
// }

?>


   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="./js/jQuery.circleProgressBar.min.js"></script>
   <script src="./js/raphael.min.js"></script>
   <script src="./js/moment.js"></script>

</body>
</html>