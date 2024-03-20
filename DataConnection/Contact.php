<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Contact.css">
</head>
<body>
 <div class="container">
  <h2 style="color: aliceblue; background-color: black;">Contact Us</h2>
  <form action="delivery_form.php" method="POST">
      <div>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>
      </div>
      <div>
          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div>
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>
      </div>
      <div>
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <div>
          <input type="submit" value="Submit">
      </div>
  </form>
</div>
<br>
<footer class="bg-dark-subtle p-3">
  <p>&copy; 2024 Your Restaurant Name. All rights reserved.</p>
</footer>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>