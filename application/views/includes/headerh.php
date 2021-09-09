<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar bg-dark navbar-dark">
       
            <div class="navbar-header">
                <a class="navbar-brand">Events Project</a>
            </div>
              
                <ul class="nav navbar-nav navbar-left">  
                
                    <li class="active"> <?php echo anchor('admin/adminreg', 'Admin Sign-Up') ?> </li>
                    <li class="active"> <?php echo anchor('admin/adminlog', 'Admin Sign-In') ?> </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">  
                
                <!-- <li class="active"> <?php //echo anchor('user/userreg', 'User Sign-Up') ?> </li>
                <li class="active"> <?php //echo anchor('user/userlog', 'User Sign-In') ?> </li>
                </ul> -->
         </div>
</nav>