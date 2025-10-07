<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Login to MyGlam</h1>
    <nav>
      <a href="index.html">Home |</a>
      <a href="signup.html">Sign Up |</a>
      <a href="login.php">Login |</a>
      <a href="about.html">About Us |</a>
      <a href="jewelry.html">Jewelry |</a>
      <a href="makeup.html">Makeup |</a>
      <a href="bags.html">Bags |</a>
      <a href="watches.html">Watches |</a>
      <a href="sunglasses.html">Sunglasses |</a>
      <a href="wishlist.html">Wishlist |</a>
      <a href="cart.html">Cart |</a>
      <a href="offers.html">Offers & Deals |</a>
      <a href="contact.html">Contact Us</a>
    </nav>
  </header>

  <main>
    <form method="POST" action="">
      <label>Username:</label><br>
      <input type="text" name="username" required><br><br>
      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>
      <button type="submit" name="login">Login</button>
    </form>

    <?php
      // Simple PHP login logic (demo purpose)
      if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Example credentials (you can replace with DB check)
        $valid_user = "admin";
        $valid_pass = "12345";

        if ($username === $valid_user && $password === $valid_pass) {
          echo "<p style='color:green;'>Login successful! Welcome, $username 😊</p>";
        } else {
          echo "<p style='color:red;'>Invalid username or password ❌</p>";
        }
      }
    ?>
  </main>
</body>
</html>
