  <?php
INCLUDE("includes/connection.php");
 INCLUDE("includes/function.php");
INCLUDE("includes/session.php");
  ?>
  <html>
 <head>
       <title>
       </title>
    </head>
<meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">
                <link rel="stylesheet" type="text/css" href="dist/css/css/font-awesome.min.css">
                <link href="dist/css/bootstrap.min.css" rel="stylesheet">
                 <link href="dist/css/layout.css" rel="stylesheet">
                <script src="js/vendor/jquery-slim.min.js"></script>
                <script src="js/vendor/popper.min.js"></script>
                <script src="dist/js/bootstrap.min.js"></script>
                <script src="js/docs.min.js"></script>
                <script src="js/ie-emulation-modes-warning.js"></script>
                <script src="js/jquery-ui.min.js"></script>
                <script type="text/javascript" src="webcam.min.js"></script>
                <body>
                <div class="container-fluid">
                 <header class="ico-0001">
                 <div class="container-fluid">

                 <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/stafflogo.jpeg" alt="yabatech image" height="40" class="logo">&nbsp;<span class="font">Online Staff Voting</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-registered"></i> Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="staffhome.php">Staff Record</a>
          <a class="dropdown-item" href="aspirant.php">Aspirant</a>
        </div>
          </li> -->
       <li class="nav-item active">
        <a class="nav-link" href="viewaspirant.php" ><i class="fa fa-eye"></i> View Asspirant<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="editprofile.php"><i class="fa fa-edit"></i> Edit profile</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="accreditation.php"><i class="fa fa-handshake-o"></i> Accreditation</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-check-square-o"></i>   Vote Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="voted.php">Voted</a>
          <!-- <a class="dropdown-item" href="nonvoted.php">Non Voted</a>
          <a class="dropdown-item" href="registered.php">All Voter</a> -->
        </div>
        </li>    </ul>
      <span class="nav-item my-2 my-lg-0">
        <a class="nav-link text-success" href="includes/logout.php"><i class="fa fa-sign-out"></i>Logout</a>
      </span>
  </div>
</nav>
</div> 
                 </header>