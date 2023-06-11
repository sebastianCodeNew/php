<?php
require 'function.php';


if (isset($_POST["nama"])) {

  createTable($_POST);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="container">
        <form action="" method="post">
          <h1>Login</h1>
          <div class="username t-input">
            <input type="text" required="" id="username" placeholder="." name='nama'/>
            <label for="username">Username</label>
            <div class="b-line"></div>
          </div>
          <div class="password t-input">
            <input type="password" required="" id="password" placeholder="." name='pass'/>
            <label for="password">Password</label>
            <div class="b-line"></div>
          </div>
          <button name="nama">Log in</button>
        </form>
      </div>
    </body>
</html>