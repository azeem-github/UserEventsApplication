<?php require_once('includes/header.php');?>
<title>Admin Registeration | Project</title>
<div class="container">
<div class="col-sm-15 offset-sm-3 text-center">
<div class="jumbotron">
<h3 style="text-decoration: underline;"><b>Admin Registeration :</h3></b>
<br>
<?php echo form_open('admin/adminreg', array('id' => 'signupForm', 'class' => 'sign-form'))?>
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
    <button class="btn btn-success" name="register"> Admin Registeration</button>
    </div>
<?php echo form_close() ?>