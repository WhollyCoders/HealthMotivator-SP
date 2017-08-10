<?php
$page_title = 'contact';
// require ('./assets/includes/header.php');
require ('./assets/php/functlib.php');
if(isset($_POST['submit_message'])){
  $email      = validate_input($_POST['rtp_email']);
  $firstname  = validate_input($_POST['rtp_firstname']);
  $lastname   = validate_input($_POST['rtp_lastname']);
  $message    = validate_input($_POST['rtp_message']);
  if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($message)){
    require('../__CONNECT/rtp-connect.php');
    require('./models/Message.php');
    $Message = new Message($connection);

    $message_params = array(
      'email'       =>    $email,
      'firstname'   =>    $firstname,
      'lastname'    =>    $lastname,
      'message'     =>    $message,
    );

    $new_message = $Message->add_new_message($message_params);

  }else{echo('There has been an ERROR!!!');}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rochelle T. Parks | The Health Motivator</title>
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo-file/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Lato:900|Teko:600" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/master.css">
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <script src="https://use.fontawesome.com/317923c619.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <a href="./"><img src="./assets/images/logo-file/logo_blue.png" alt="Rochelle T. Parks"></a>
    </div>
  </header>
  <nav>
    <div class="container">
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#rtp-about">about</a></li>
        <li><a href="#rtp-help">how can i help</a></li>
        <li><a href="#rtp-contact">contact</a></li>
        <li><a href="#rtp-subscribe">subscribe</a></li>
        <li id="preorder-link"><a href="#rtp-preorder">pre-order book</a></li>
      </ul>
    </div>
  </nav>
