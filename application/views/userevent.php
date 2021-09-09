<?php require_once('includes/headeru.php');?>
<title>User Events | Project</title>

<div class="container">

<?php echo anchor('user/viewevents', 'View Events')?> |
<?php echo anchor('user/logout', 'Logout')?> 
<div class="col-sm-15 offset-sm-3 text-center">
<div class="jumbotron">
<h3> Create Event </h3>
<br><br>

<?php echo form_open('user/userevent', array('id' => 'signupForm', 'class' => 'sign-form'))?>
    <div class="form-group">
      Even Id : <input type="text" name="event_id" placeholder="Event ID">
      <span style="color:red" class="danger" ><?php echo form_error('event_id'); ?> </span>
    </div>
    <div class="form-group">
       Status : <select class="select" name="status" >
            <option value=""> Select </option>
            <option value="1"> True </option>
            <option value="2"> False </option>
        </select>
        <span style="color:red" class="danger" ><?php echo form_error('status'); ?> </span>
    </div>
    <div class="form-group">
    <button class="btn btn-warning" name="create"> Create</button>
    </div>

<?php echo form_close() ?>