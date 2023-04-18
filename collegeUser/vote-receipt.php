<?php include 'header.php'?>
<?php include 'collegeSession.php'?>
  <title>Vote</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
    }
    input[type="radio"] {
      transform: scale(1.5); /* increase size by 50% */
    }
    @media screen and (max-width: 380px) {
      .box {
        display: flex;
        align-items: center;
        padding: 5px;
        height: 100px;
        width: 260px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
        transition: 0.3s;
        margin: 10px;
      }
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

<div class="full-main">

  <div class="container-fluid x" id="lockpage">
    <?php include "../schoolLogo.php"?>
  </div>

  <div id="darkOverlay" class="dark-overlay" style="display:none;">
    <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
  </div>
  
    <hr>

    <?php include '../time.php'?>

    <?php include '../messageNotice.php'; ?>

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
    
    <h1 class="fw-bold"><b><?php echo $row['title']; ?></b></h1>
    
    <?php	
      }		
      $conn->close();
      }
    ?>
  </div>
  
  <br>
  
        <!--FILTER END-->
      <div class="container"><h2><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 25px; margin-bottom: 7px;"> VOTE RECEIPT</h2></div>
      <div class="container mb-3 overflow-auto rounded">

        <div class="vote-container p-3 rounded" style="border: 3px solid;">

          <div class="container-fluid">
            <h4 class="text-success">NOTICE: Your vote has been casted successfully. </h4>
            <p class="text-danger">Warning: Please do not post or share your vote receipt to anyone.</p>
          </div>

            <?php include '../dbconn.php';
              $voterID = $_SESSION['voterID'];
              $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT confirmedPresident FROM clg_confirmedvote WHERE voterID = '" . $voterID . "')";
              $result = $conn->query($sql);
                                    
              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {               
            ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

            <?php	
              }		
                $conn->close();
              }
            ?>

            <?php include '../dbconn.php';
              $voterID = $_SESSION['voterID'];
              $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT confirmedVicePresident FROM clg_confirmedvote WHERE voterID = '" . $voterID . "')";
              $result = $conn->query($sql);
                                    
              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {               
            ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

            <?php	
              }		
                $conn->close();
              }
            ?>

            <?php include '../dbconn.php';
              $voterID = $_SESSION['voterID'];
              $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT confirmedSecretary FROM clg_confirmedvote WHERE voterID = '" . $voterID . "')";
              $result = $conn->query($sql);
                                    
              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {               
            ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

            <?php	
              }		
                $conn->close();
              }
            ?>

            <?php include '../dbconn.php';
              $voterID = $_SESSION['voterID'];
              $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT confirmedTreasurer FROM clg_confirmedvote WHERE voterID = '" . $voterID . "')";
              $result = $conn->query($sql);
                                    
              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {               
            ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

            <?php	
              }		
                $conn->close();
              }
            ?>

            <?php include '../dbconn.php';
              $voterID = $_SESSION['voterID'];
              $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT confirmedCollegeRepresentative FROM clg_confirmedvote WHERE voterID = '" . $voterID . "')";
              $result = $conn->query($sql);
                                    
              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {               
            ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

            <?php	
              }		
                $conn->close();
              }
            ?>
          <div class="container p-2 text-center">
            <br>
            <a class="btn btn-primary px-3" href="home.php">Home</a>
            <a class="btn btn-primary px-3" href="result.php">Result</a>
          </div>

      </div>
            </div>
  </div>
</div>


<?php include 'footer.php' ?>