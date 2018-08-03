<?php
  echo'
<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta name="author" content="Moise Medina">
    <meta http-equiv="refresh" content="500">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
  <link href="mycss/index.css" rel="stylesheet" type="text/css" >
  <link href="index.css" rel="stylesheet" type="text/css" >
    
    <header>
      <title>Group 2</title>  
    </header>
    <h2 id="corp_name" style="font-family:Georgia"> GROUP 2 <span id = "corp_logo">®</span></h2>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light">
      <a class="navbar-brand" href=""> <img src="FAU-Logo-Clear-Background.png" alt="company logo" style="width:30px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-corp" aria-controls="nav-corp" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav-corp">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="author_name nav-link" href="about_project.html"> About our Project </a>
          </li>
      </ul>
      <ul class="navbar-nav navbar-right">
          <li class="nav-item ">
          <a class="nav-link active" href="index.html"><div class="link"> HOME </div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_CS/AboutCS.html"><div class="link"> About Cameron Sarni</div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_MM/about_author.html"><div class="link"> About Moise Medina</div></a>
          </li>
          
        </ul>
    </div>
</nav>

  <div class="container">
        <div class="row">
      <div class="col-4, col"></div>
      <div class="col-4">
        <h3 class="welcome" >Welcome to Our group page</h3>
      </div>
      <div class="col-4, col"></div>
    </div>
    <div class="row">
  <div class="col-12">
    <p>
      This is group 2!!! \'\' Say it like "This!!! is!!! sparta!!!" to view our other pages Thank You\'\'
    </p>   
  </div>
  <div class="col-12">
    <form action="/action_page.php">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <input type="submit" value="Submit">
</form>

  </div>
    </div>
    
  </div>
  

  <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="index.js"></script>

  </body>
</html>
';

?>