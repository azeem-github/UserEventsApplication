<?php require_once('includes/headeru.php');?>
<title>View Events | Project</title>
<div class="container">
<?php echo anchor('user/userevent', 'User Events')?> |
<?php echo anchor('user/logout', 'Logout')?> 

<div class="col-sm-15 offset-sm-2 text-center">
<br>
<?php
 $conn = mysqli_connect('localhost', 'root', '', 'app');

 $getusers = mysqli_query($conn, "SELECT * FROM events ORDER by id ASC");
?>


  <table class="table-dark">
  <table class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
      <th> User Email</th>
        <th> Event Id</th>
        <th>status</th>
        <th>Date</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    while($data = mysqli_fetch_array($getusers))
    {
    ?>
    <tr>
    <td><?php echo $data['user_email_id'];?></td>
    <td><?php echo $data['event_id'];?></td>
    <td><?php echo $data['status'];?></td>
    <td><?php echo $data['date'];?></td>
    </tr>
    </tbody>

  <?php } ?>
</div>
</table>
</body>


  