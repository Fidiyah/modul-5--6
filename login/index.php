
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body{
  background-image:url("background.jpg");
}
#card{
  background-color:#00ffff;
}
#head{
    background-color:#40ff00;
}
#login{
    background-color: #ff8000;
  font-family:"raleway"
  height : 30px;
  width : 120px;
}
</style>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-
         scale=1.0">
<title>form login</title>
 <!--load bootstrap css-->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
          <!--load jquery and bootstrap js-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.js"></script>
          <script type="text/javascript">
          </script>
 </head>
 <body>
 <form method="post" action="proses-login.php">
 <div class ="container">
            <div class ="row">
            <div id="card" class="card col-3" style="margin-left: 450px; margin-top: 250px;" >
            <div id="head" class = "card-header">FORM LOGIN ADMIN</div>
            username : <input type ="text" name="username" class="form_login"><br>
  password : <input type = "password" name="password" class="form_login"><br>
            <input type="submit" value="Login" name="btnlogin" id="login" class="login">

  </div>
  </div>
  </div>
  </div>
  </body>
  </html>