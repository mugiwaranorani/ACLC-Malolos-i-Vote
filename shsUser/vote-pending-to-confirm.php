<?php include 'header.php'?>
<?php include 'shsSession.php'?>
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
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class='fas fa-user-lock'></i> Change Password</a></li>
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class='fas fa-power-off'></i> Log Out</a></li>
        </ul>
      </li>

    </ul>

  </div>
</nav>

<div class="full-main">

  <div class="container-fluid x" id="lockpage">
    <?php include "../schoolLogo.php"; ?>
  </div>

  <div id="darkOverlay" class="dark-overlay" style="display:none;">
    <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
  </div>
  
    <hr>

    <?php include '../time.php'; ?>

    <?php include '../messageNotice.php'; ?>

    <?php include 'userSettingsModals/modalChangepass.php'; ?>
    <?php include 'userSettingsModals/modalEmailVerification.php'; ?>
    <?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>

  <div class="container">
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM shs_title WHERE titlePage='Vote'";
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

  <?php
    include '../dbconn.php';
    $voterID = $_SESSION['voterID'];    
    $sql = "SELECT voterName FROM shs_confirmedvote WHERE voterID = $voterID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<script>window.location.href = 'vote-warning.php';</script>";
        exit();

    }else{
  ?>
        <!--FILTER END-->
      <div class="container"><h2><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 25px; margin-bottom: 7px;"> VOTE CONFIRMATION</h2></div>
      <div class="container rounded">
        <form action="vote-confirmation-process.php" method="post"  enctype="multipart/form-data">
          <input type="hidden" name="vname" value="<?php echo $_SESSION['fullName'];?>">
          <input type="hidden" name="vid" value="<?php echo $_SESSION['voterID'];?>">
        
          <div class="vote-container p-3 rounded mb-3" style="border: 3px solid;">
            <div class="container-fluid text-danger" style="margin-left:-8px;"><h4>NOTICE: Please check your selected candidates before confirming... </h4><br></div>
                
              <?php include '../dbconn.php';
                $voterID = $_SESSION['voterID'];
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingPresident FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="president" name="president" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingVicePresident FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="vicepresident" name="vpresident" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingSecretary FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="secretary" name="secretary" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingTreasurer FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="treasurer" name="treasurer" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingAuditor FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="auditor" name="auditor" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingShs11Representative FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="shs11rep" name="shs11rep" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                $sql = "SELECT * FROM shs_candidates WHERE candidateID IN(SELECT pendingShs12Representative FROM shs_pendingvote WHERE voterID = '" . $voterID . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="shs12rep" name="shs12rep" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
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
                <input class="btn btn-success px-4" id="confirmBtn" name="confirmBtn" type="submit" value="Confirm">
                <input class="btn btn-danger px-3" id="resetBtn" name="resetBtn" type="submit" value="Reset Vote">
              </div>
          </form>
			  </div>
      </div>
      <?php
      }
      ?>
  </div>
</div>


<?php include 'footer.php' ?>