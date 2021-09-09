<?php require_once('includes/headerhome.php');?>

<title>Admin Profile | Project</title>

<div class="colspan-10 col-md-10 col-md-offset-1">
<br>
<br>
<div class="container">

<?php if(isset($_SESSION['success'])) { ?>
    
   <h3> <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div></h3>
    <?php } 
    ?>
    <?if(isset($_SESSION['success'])) { ?>
<br>
<br>
<br>
    <h3 style="text-decoration: underline;"> Hello, Admin <?php echo $_SESSION['username']; ?> !</h3>
    <br>
    <br>
    <ul class="nav navbar-nav navbar-left">
                   <h3><b> <li><?php echo anchor('user/userreg', ' (+) Add User')?></li>    </h3></b>                         
                    </ul>
  <br>  
  
<br>
