<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <?php include 'include/hearder.php'; ?>
  <body>
    <img src="images/smile.png" alt="smile image" class="smile">
    <div class="friend-container">
      <h1>Hey Friend,</h1>
      <h2>Tell us your name.</h2>
    </div>
    <div class="form-container">
      <form name="form" action="/smile.php" method="get">
        <input type="text" name="name" id="name" placeholder="First Name: ">
      </form>
    </div>

  </body>
  <?php include 'include/footer.php'; ?>
</html>
