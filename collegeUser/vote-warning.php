<?php include 'header.php'; ?>
<?php include 'collegeSession.php'; ?>
  <title>Vote</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
    }
    input[type="radio"] {
      transform: scale(1.5); /* increase size by 50% */
    }
    .dark-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none; /* Initially set as none */
    opacity: 0; /* Initially set as transparent */
    transition: opacity 0.3s ease;
  }

  .lock-icon {
    color: white;
    font-size: 100px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
  </style>
</head>
<body>

<div class="nav-head">
<nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
  <div class="container-fluid">
    <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">

      <li class="nav-item">
        <a class="nav-link" href="home.php" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fas fa-home" style="font-size:24px"></i><span class="d-none d-sm-inline"> Home</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="candidates.php" data-toggle="tooltip" data-placement="bottom" title="View Candidates"><i class="fas fa-id-card" style="font-size:24px"></i><span class="d-none d-sm-inline"> Candidates</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="result.php" data-toggle="tooltip" data-placement="bottom" title="Result"><i class="fa fa-bar-chart" style="font-size:24px"></i><span class="d-none d-sm-inline"> Result</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
          <i class="fas fa-user-cog" style="font-size:24px"></i></a>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end dropdown-menu-lg-end ">
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class='fas fa-user-lock'></i> Change Password</a></li><br>
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class='fas fa-power-off'></i> Log Out</a></li>
        </ul>
      </li>

    </ul>

  </div>
</nav>

<div class="full-main" id="lockpage">

  <?php include '../time.php'; ?>

  <div class="container-fluid x">
    <?php include "../schoolLogo.php"; ?>
  </div>

  <?php include '../messageNotice.php'; ?>

    <hr>

    <?php include 'userSettingsModals/modalChangepass.php'; ?>
    <?php include 'userSettingsModals/modalEmailVerification.php'; ?>
    <?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>

  <div class="container">
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM clg_title WHERE titlePage='Vote'";
      $result = $conn->query($sql);
                  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_array()){
    ?>
    
    <h1><strong><b><?php echo $row['title']; ?></strong></b></h1>
    
    <?php	
      }		
      $conn->close();
      }
    ?>
  </div>
  
  <br>
    <!--CANDIDATE SELECTION START-->

      <hr style="margin-top: -1px;">
        <!--FILTER END-->
    
      <div class="container p-4 rounded" style="border: 1px solid red;">
        <p style="color:red; font-size: 30px;">WARNING: You already voted! Press "Okay" to leave this page.</p>    
        <a class="btn btn-success px-5 text-center" href="vote-receipt.php">Okay</a>
      </div>
  
    </div>
  
</div>


<?php include 'footer.php' ?>