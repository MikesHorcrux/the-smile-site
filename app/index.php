<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <title>The Smile site</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <!-- header-->
  <?php include 'include/hearder.php'; ?>
  <body>
    <img src="images/smile.png" alt="smile image" class="smile">
    <div class="friend-container">
      <h1>Hey Friend,</h1>
      <h2>Tell us your name.</h2>
    </div>
    <div class="form-container">
      <form name="form" action="/smile.php" method="get">
        <table>
          <tr>
            <td><input type="text" name="name" id="name" placeholder="First Name: "></td>
            <td><input class="arrow" type="image" src="images/arrow.png" alt="arrow"/></td>
          </tr>
        </table>
      </form>
      <!-- The form takes you to smile.php-->
    </div>

  </body>
  <!-- footer-->
  <?php include 'include/footer.php'; ?>
</html>
