<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./bootstrap/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container text-center">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
      </form>
        <button class="btn btn-lg btn-primary" type="submit" onclick="login()">Sign in</button>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </body>

<script>
function login(){
   //alert("\"Row mail"+i+"\"");
   var email = document.getElementById("inputEmail").value;
   var password = document.getElementById("inputPassword").value;

    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://localhost/gmail/apikey",
      "method": "POST",
      "headers": {
        "content-type": "application/x-www-form-urlencoded",
        "cache-control": "no-cache",
        "postman-token": "21a8d0c0-ba11-d194-5509-7a3220e33fd8"
      },
      "data": {
        "email": email,
        "password": password
      }
    }
    //alert("ok");
    $.ajax(settings).done(function (response) {
      response = JSON.parse(response);
      if(response["result"]=="success"){
        var user_details = response["user_details"];
        document.cookie = "username="+user_details["name"];
        document.cookie = "email="+user_details["email"];
        document.cookie = "apikey="+user_details["apikey"];
        window.location = "http://localhost/gmailviews/inbox.php";
      }
      else{
        alert("Invalid username or password");
      }
      console.log(response);
    });
}
</script>
</html>