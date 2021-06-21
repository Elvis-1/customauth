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

    <title>Virtual Fit | Dashboard</title>

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

<body>
    
    
<div class="container">
  <div class="row" style="margin-top:45px">
     <div class="col-md-6 col-md-offset-3">
     <h4>Profile</h4>
     <hr>
        <table class="table table-hover bg-light">
           <thead>
             <th>Name</th>
             <th>Email</th>
             <th></th>
           </thead>
            <tr>
             <td>{{$LoggedUserInfo->name}}</td>
             <td>{{$LoggedUserInfo->email}}</td>
             <td><a href ="logout">Logout</a></td>
            </tr>
        </table>
     </div>
  </div>

</div>


   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="./js/jQuery.circleProgressBar.min.js"></script>
   <script src="./js/raphael.min.js"></script>
   <script src="./js/moment.js"></script>

</body>
</html>