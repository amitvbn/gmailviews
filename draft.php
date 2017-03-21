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

    <title>Amit Mail</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="./bootstrap/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Amit's Mail</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://localhost/gmailviews/compose.php">Compose</a></li>
            <li><a href="http://localhost/gmailviews/sent_items.php">Sent Items</a></li>
            <li><a href="http://localhost/gmailviews/inbox.php">Inbox</a></li>
            <li><a href="http://localhost/gmailviews/draft.php">Draft</a></li>
            <li><a href="http://localhost/gmailviews/trash.php">Trash</a></li>
            <button class="btn btn-lg btn-primary" type="submit" onclick="Logout()">Logout</button>            
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="http://localhost/gmailviews/inbox.php">Inbox</a></li>
            <li><a href="http://localhost/gmailviews/compose.php">Compose</a></li>
            <li><a href="http://localhost/gmailviews/sent_items.php">Sent Items</a></li>
            <li class="active"><a href="http://localhost/gmailviews/draft.php">Draft<span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost/gmailviews/trash.php">Trash</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="page-header" id="welcometext"></div>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="20" height="20" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Benefit 1</h4>
              <span class="text-muted">Based on Bootstrap</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="20" height="20" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Benefit 2</h4>
              <span class="text-muted">AJAX Based backend handling</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="20" height="20" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Benefit 3</h4>
              <span class="text-muted">Simple and easy</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="20" height="20" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Benefit 4</h4>
              <span class="text-muted">Attractive</span>
            </div>
          </div>

          <h2 id="subHeader" class="sub-header">Draft</h2>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                  <th>Time</th>
                  <th>To</th>
                  <th>Subject</th>
                  <th>Mail</th>
                  </tr>
                </thead>
                <tbody id="inboxtable">
                </tbody>
              </table>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- <script src="./bootstrap/js/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="./bootstrap/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>

<script>

var sent_data =[];

//updatehtml();
loadDoc("inbox");
//updatehtml();

function f1(obj)
{
  // alert("f1 called");
  obj.style.color = 'red';
  //form validation that recalls the page showing with supplied inputs.    
}

  var mails = [];
  var user = [];

function updatehtml(){
  mails = JSON.parse(sent_data);

  document.getElementById("welcometext").innerHTML = "<h4>Hello "+getCookie("username")+"("+getCookie("email")+")</h4>";
  // alert(mails.length);  
  console.log(mails);
  for(i=0;i<mails.length;i++)
  {
    //alert(i);
     document.getElementById("inboxtable").innerHTML += "<tr id=\"mail"+i+"\" onclick='showmailRow("+i+")' style=\"font-weight: 600;\">" + "<td>"+mails[i].timestamp +"</td><td>"+mails[i].email +"</td><td>"+mails[i].subject+"</td><td>"+mails[i].body+"</td>" + "<td><button type='button' onclick='deletemail("+i+")'>Delete</button></td></tr>";
     isread(i);
  }
}

function isread(i){
   //alert("\"Row mail"+i+"\"");
   if(mails[i].read=="1")
   {
     document.getElementById("mail"+i).style.color = 'green';
     document.getElementById("mail"+i).style.fontWeight  = "300";
    }
}

function showmailRow(i){
   //alert("\"Row mail"+i+"\"");
   document.getElementById("mail"+i).style.color = 'green';
   document.getElementById("mail"+i).style.fontWeight  = "300";
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://localhost/gmail/read",
      "method": "GET",
      "headers": {
        "content-type": "application/x-www-form-urlencoded",
        "email": getCookie("email"),
        "apikey": getCookie("apikey"),
        "id": mails[i].id
      }
    }

    $.ajax(settings).done(function (response) {
      // alert("read");
      //console.log(response);
      sent_data = response;
      updatehtml();
    });
}

function deletemail(i){
   //alert("\"Row mail"+i+"\"");
   document.getElementById("mail"+i).style.color = 'red';
   document.getElementById("mail"+i).style.fontWeight  = "300";

    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://localhost/gmail/sentdelete",
      "method": "GET",
      "headers": {
        "content-type": "application/x-www-form-urlencoded",
        "email": getCookie("email"),
        "apikey": getCookie("apikey"),
        "id": mails[i].id
      }
    }

    $.ajax(settings).done(function (response) {
      location.reload();
    });
}

function loadDoc(action) {
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/gmail/draft",
    "method": "GET",
    "headers": {
      "content-type": "application/x-www-form-urlencoded",
      "email": getCookie("email"),      
      "apikey": getCookie("apikey"),
      "cache-control": "no-cache",
      "postman-token": "9d32cf08-7dd4-246e-2a32-d9b4d835ea11"
    }
  }

  $.ajax(settings).done(function (response) {
    response2 = JSON.parse(response);
    if(response2["result"]=="user not login"){
      window.location = "http://localhost/gmailviews/signin.php";
    }
    sent_data = response;
    updatehtml();
  });
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function Logout(){

  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/gmail/unsettoken",
    "method": "GET",
    "headers": {
      "content-type": "application/x-www-form-urlencoded",
      "email": getCookie("email"),
      "cache-control": "no-cache",
      "postman-token": "f5a8d1f1-df78-e8f2-5f64-a15adaf0dabf"
    }
  }

  $.ajax(settings).done(function (response) {
    console.log(response);
    window.location = "http://localhost/gmailviews/signin.php";
  });
}

</script>
</html>