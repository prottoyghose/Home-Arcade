<!DOCTYPE html>
<html lang="en">
<head>
  <title>NW HomeArcade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap.min.css">
  <link href="./dashboard.css" rel="stylesheet"> 
  <link rel="icon" href="./favicon.ico">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="color:#fff;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"></span>Arcade</a>
            </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"> Remember me </label>
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!-- /.navbar-collapse -->
          </div>
        </nav>
<div class="container-fluid">
    <div class="row">
        <?php include ("carousel.php") ?>  
        <br>
        <br>
        <br>
        <div class="container">
            <div align ="right">
                <big style="color:BLUE;">CAPTURE.</big> <big style="color:GREEN;">UPLOAD.</big> <big style="color:ORANGE;">FORGET.</big>    
                <br><br>
              <h2>SIGN UP </h2>
              <form class="form-inline" role="form">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" size="30">
                </div>
            <br>
            <br>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" size="30">
                </div>
            <br>
            <br>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="button" class="btn btn-primary btn-lg">SIGN UP</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
                <br>
                <div class="row" style="margin: 0 auto;">
                    <div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel panel-primary footer">
                          <div class="panel-body">
                            <a class="btn btn-default" href="https://www.facebook.com/nationwide/">
                            <img src="http://i.stack.imgur.com/e2S63.png" width="20" /> Follow us on Facebook 
                            </a>      
                            <a class="btn btn-default" href="https://twitter.com/Nationwide">
                            <img src="twitter.png" width="20"/> Follow us on Twitter
                            </a>
                            <a class="btn btn-default" href="https://plus.google.com/+nationwide/posts">
                            <img src="google-plus.png" width ="20"/> Follow us on Google +
                            </a>
                            <br>
                            <br>
                             <a href="https://nationwide.com">Nationwide.com</a> |
                             <a href="./faq.php">FAQ</a> |
                             <a href="./aboutus.php">About us</a> | 
                             <a href="https://www.nationwide.com/contact-us.jsp">Contact us</a> | 
                             <a href="./pokemon.jpg">Careers</a>
                            <br> 
                            <b>Nationwide is on your side®</b>  
                          </div>
                        </div>
                    </div>
                </div>
    </div><!-- end row -->
</div><!-- end container fluid -->
    <!-- Bootstrap core JavaScript
<!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body></html> 



<style>
#header {
    background-color:white;
    color:black;
    text-align:center;
    padding:5px;
}
#footer {
    background-color:white;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
h1 {
float left;
}
big{
    font-size:25pt;
}
</style>