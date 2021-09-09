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
<div class="container bordered">
    <nav class="navbar navbar-primary">
        <div class="container-fluid">
        
            <div class="navbar-header"></div>
              <h2 style="text-decoration: underline;">  <a class="navbar-brand"> Events Project</a></h2>
            </div>
            <ul class="nav navbar-nav navbar-left">
            <li><?php echo anchor('admin/index', 'Home')?></li>
            
            </ul>
                    <ul class="nav navbar-nav navbar-left">
                    <li><?php echo anchor('admin/adminreg', 'Admin Sign Up')?></li>
                    <li><?php echo anchor('admin/adminlog', 'Admin Login')?></li>                               
                    </ul>
                   
         </div>
</nav>