<?php require_once('includes/headeru.php');?>
<title>User Registeration | Project</title>
<div class="container">

<?php echo anchor('admin/admindata', 'Home')?> | 
<?php echo anchor('user/userlog', 'User Login')?>
<div class="col-sm-15 offset-sm-3 text-center">
<br>
<div class="jumbotron">
<h3 style="text-decoration: underline;"><b>User Registeration :</h3></b>
<br>
<?php echo form_open('user/userreg', array('id' => 'signupForm', 'class' => 'sign-form'))?>
    <div class="form-group">
       Username : <input type="text" name="username" placeholder="Name">
       <span style="color:red" class="danger" ><?php echo form_error('username'); ?> </span>
    </div>
    <div class="form-group">
        E-mail : <input type="email" name="email" placeholder="Email">
        <span style="color:red" class="danger" ><?php echo form_error('email'); ?> </span>
    </div>
    <div class="form-group">
       Password : <input type="password" name="password"  placeholder="Password">
       <span style="color:red" class="danger" ><?php echo form_error('password'); ?> </span>
    </div>
    <div class="form-group">
        Confirm Password : <input type="password" name="cpass" placeholder="Confirm Password">
        <span style="color:red" class="danger" ><?php echo form_error('cpass'); ?> </span>
    </div>
    <br>
    <div class="form-group">
    <button class="btn btn-info" name="register"> User Registeration</button>
    </div>
<?php echo form_close() ?>