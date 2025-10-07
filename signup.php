<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Sign Up</h2>

  <form method="POST" action="">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>

    <button type="submit" name="signup">Sign Up</button>
  </form>

  <?php
  if (isset($_POST['signup'])) {
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirmPassword = $_POST['confirmPassword'];

      if ($password !== $confirmPassword) {
          echo "<p style='color:red;'>Passwords do not match </p>";
      } else {
          echo "<p style='color:green;'>Sign Up Successful! <br>Welcome, $fullname</p>";
          echo "<p>You can now <a href='login.php'>Login</a>.</p>";
      }
  }
  ?>

  <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
