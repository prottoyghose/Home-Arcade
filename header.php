<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NW HomeArcade</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link href="./dashboard.css" rel="stylesheet">  
    <link rel="icon" href="./favicon.ico">
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
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>Arcade</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./logout.php">Logout</a></li>
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
            <li><a href="./index.php">Catalog</a></li>
            <li><a href="#">Profile</a></li>
          </ul> 
          <a href="https://www.nationwide.com/property-claims.jsp" class="btn btn-danger btn-lg dropdown-toggle" type="button">
            File Claim
          </a>
          <br><br>
          <a class="btn btn-default" href="feedback.php">Give us feedback</a>
        </div>