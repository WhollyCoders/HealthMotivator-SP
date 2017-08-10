<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Messages</title>
  </head>
  <body>
    <h1>View Messages</h1>
    <form action="./messages/index.php" method="post">
      <p>
        <label for="username">Username:</label>
        <input type="text" name="rtp_username" placeholder="Username">
      </p>
      <p>
        <label for="password">Password:</label>
        <input type="password" name="rtp_password" placeholder="Password">
      </p>
      <p>
        <input type="submit" name="submit_login" value="View Messages">
      </p>
    </form>
  </body>
</html>
