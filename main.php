<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <form action="login.php" method="POST">
      <h2>User Login</h2>
      <label for="uname">Username</label>
      <input type="text" id="uname" name="uname" placeholder="Enter your username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>