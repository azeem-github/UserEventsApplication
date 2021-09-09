<?php require_once('includes/headeru.php');?>

<title>User Login | Project</title>
<div class="container">

<?php echo anchor('user/userreg', 'User Register')?> |
<?php echo anchor('user/userlog', 'User Login')?>
<div class="col-sm-15 offset-sm-3 text-center">
<br>
<div class="jumbotron">
<h3 style="text-decoration: underline;"><b>User Login :</h3></b>
<br>
<?php if(isset($_SESSION['success'])) { ?>
    
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php } 
    ?>
    
<?php echo form_open('user/userlog', array('id' => 'signinForm', 'class' => 'sign-form'))?>
    <div class="form-group">
        Email : <input type="email" name="email" placeholder="Email">
        <span style="color:red" class="danger" ><?php echo form_error('email'); ?> </span>
    </div>
    <div class="form-group">
       Password : <input type="password" name="password"  placeholder="Password">
       <span style="color:red" class="danger" ><?php echo form_error('password'); ?> </span>
    </div>
    <br>
    <div class="form-group">
    <button class="btn btn-info" name="login"> User Login</button>
    </div>
    
<?php echo form_close() ?>