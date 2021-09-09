<?php require_once('includes/header.php');?>
<title>Admin Login | Project</title>
<div class="container">

<div class="col-sm-15 offset-sm-3 text-center">
<div class="jumbotron">
<h3 style="text-decoration: underline;"><b>Admin Login :</h3></b>
<br>
<?php if(isset($_SESSION['success'])) { ?>
    
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php } 
    ?>

<?php echo form_open('admin/adminlog', array('id' => 'signinForm', 'class' => 'sign-form'))?>
    <div class="form-group">
       E-mail : <input type="email" name="email" placeholder="Email">
       <span style="color:red" class="danger" ><?php echo form_error('email'); ?> </span>
    </div>
    <div class="form-group">
       Password : <input type="password" name="password" placeholder="Password">
       <span style="color:red" class="danger" ><?php echo form_error('password'); ?> </span>
    </div>
    <br>
    <div class="form-group">
    <button class="btn btn-success" name="login"> Admin Login</button>
    </div>
    </div>
<?php echo form_close() ?>


