<?php
if($_POST){
  if(isset($_POST['submit_login'])){
    require('../../assets/php/functlib.php');
    $username = validate_input($_POST['rtp_username']);
    $password = validate_input($_POST['rtp_password']);
    if($username == "roctrepar" && $password == "health"){
      require('../../../__CONNECT/rtp-connect.php');
      require('../../models/Message.php');
      require('../../_controllers/MessagesController.php');
      $controller = new MessagesController($connection);
      $messages = $controller->index();
    }else{
      header('Location: ../../index.php');
    }
  }else{
    header('Location: ../../index.php');
  }
}else{
  header('Location: ../../index.php');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages Index</title>
  </head>
  <body>
    <div class="container">
      <h1>Messages</h1>
      <table>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
        </tr>
      <?php foreach ($messages as $message) { ?>
        <tr>
          <th><?php echo($message['id']); ?></th>
          <th><?php echo($message['firstname']); ?></th>
          <th><?php echo($message['lastname']); ?></th>
          <th><a href="./show.php?id=<?php echo($message['id']); ?>">Show Detail</a></th>
        </tr>
      <?php  } ?>
      </table>
    </div>
  </body>
</html>
