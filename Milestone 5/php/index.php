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
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" >
  <link href="../mycss/index.css" rel="stylesheet" type="text/css" >
  <link href="../index.css" rel="stylesheet" type="text/css" >
    
    <header>
      <title>Group 2</title>  
    </header>
    <h2 id="corp_name" style="font-family:Georgia"> GROUP 2 <span id = "corp_logo">®</span></h2>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light">
      <a class="navbar-brand" href=""> <img src="../FAU-Logo-Clear-Background.png" alt="company logo" style="width:30px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-corp" aria-controls="nav-corp" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav navbar-right">
          <li class="nav-item ">
          <a class="nav-link active" href="../index.html"><div class="link"> HOME </div></a>
          </li>
           <li class="nav-item">
              <a class="nav-link" href="AboutUs.html">
                  <div class="link">
                  About Us
                  </div>
              
              </a>
          </li>

          </ul>
</nav>

  <div class="container">
        <div class="row">
      <div class="col-3, col"></div>
      <div class="col-6">
        <h3 class="welcome" >Welcome to our search portal</h3>
      </div>
      <div class="col-3, col"></div>
    </div>
    <div class="row">
  <div class="col-12">
    <p>
      Here you can find the defintion of every word we think needed to be defined in the Data Definition section.</br>
      These words were as follow: CSnap, Modern devices, Streamlined, CRS, Complaint.
    </p>   
  </div>
  ';

  $db =  new mysqli("localhost","cen4010sum18_g02","group2");
          $db->select_db ("cen4010sum18_g02");

  @$word = @$_POST['wsearch'];

  $defintion = $db->query("SELECT Definition FROM Data_definition WHERE Data = '$word'");
          $defintion = $defintion->fetch_assoc();
    //echo 'the word searched was ';
echo '
    <div class="col-12">
    <p>
      ';
    echo $word;
    echo ': ';
    echo $defintion["Definition"];
    echo'.';
    echo '
    </p>   
  </div>';

  echo'
 <div class="col-12">
    <form action="../php/index.php" method="post">
  Next word to be searched: <input type="text" name="wsearch" id="wsearch" >
  <input type="submit" value="Submit">
</form>
  </div>
    </div>
    
  </div>
  

  <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../index.js"></script>

  </body>
</html>
';

?>