<?php include 'header.php'?>
<?php include 'collegeSession.php'?>
  <title>SC Candidates</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
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
        <a class="nav-link active" href="candidates.php" data-placement="bottom" title="View Candidates"><i class="fas fa-id-card" style="font-size:24px"></i><span class="d-none d-sm-inline"> Candidates</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
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

      <!--<li class="nav-item">
        <a class="nav-link" href="login.php">Login(temporary)</a>
      </li>-->

    </ul>

  </div>
</nav>



<div class="full-main">

  <div class="container-fluid x" id="lockpage">
    <?php include "../schoolLogo.php"?>
  </div>
  
  <hr>

  <?php include '../time.php'?>

  <div id="darkOverlay" class="dark-overlay" style="display:none;">
    <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
  </div>

  <?php include '../messageNotice.php'; ?>

  <?php include 'userSettingsModals/modalChangepass.php'; ?>
  <?php include 'userSettingsModals/modalEmailVerification.php'; ?>
  <?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>
  
  <div class="container">

  
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM clg_title WHERE titlePage='Candidates'";
      $result = $conn->query($sql);
                  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_array()){
    ?>
    
    <h1><strong><b><?php echo $row['title']?></strong></b></h1>
    
    <?php	
      }		
      $conn->close();
      }
    ?>
    <!-- Nav pills -->
    <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

      <div class="nav-item">
        <a class="nav-link active" data-bs-toggle="pill" href="#viewall">View All</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#plA">PARTY LIST A</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#plB">PARTY LIST B</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#president">President</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#vpresident">Vice President</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#secretary">Secretary</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#treasurer">Treasurer</a>
      </div>
      <div class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#collegerep">College Representative</a>
      </div>
      
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
      
      <!--* VIEW ALL SECTION * * VIEW ALL SECTION * * VIEW ALL SECTION * -->
        <?php include 'collegeCandidateContent/viewAll.php'; ?>
      <!--* VIEW ALL SECTION * * VIEW ALL SECTION * * VIEW ALL SECTION * -->

      <!--* PARTY LIST A SECTION * *  PARTY LIST A SECTION * *  PARTY LIST A SECTION * -->
        <?php include 'collegeCandidateContent/partyListA.php'; ?>
       <!--* PARTY LIST A SECTION * *  PARTY LIST A SECTION * *  PARTY LIST A SECTION * -->

      <!--* PARTY LIST B SECTION * *  PARTY LIST A SECTION * *  PARTY LIST A SECTION * -->
        <?php include 'collegeCandidateContent/partyListB.php'; ?>
       <!--* PARTY LIST B SECTION * *  PARTY LIST A SECTION * *  PARTY LIST A SECTION * -->

      <!--* PRESIDENT SECTION * * PRESIDENT SECTION * * PRESIDENT SECTION * -->
        <?php include 'collegeCandidateContent/president.php'; ?>
      <!--* PRESIDENT SECTION * * PRESIDENT SECTION * * PRESIDENT SECTION * -->

      <!--*VICE PRESIDENT SECTION * *VICE PRESIDENT SECTION * *VICE PRESIDENT SECTION * -->
        <?php include 'collegeCandidateContent/vicePresident.php'; ?>
      <!--*VICE PRESIDENT SECTION * *VICE PRESIDENT SECTION * *VICE PRESIDENT SECTION * -->

      <!--* SECRETARY SECTION * * SECRETARY SECTION * * SECRETARY SECTION * -->
        <?php include 'collegeCandidateContent/secretary.php'; ?>
      <!--* SECRETARY SECTION * * SECRETARY SECTION * * SECRETARY SECTION * -->

      <!--* TREASURER SECTION * * TREASURER SECTION * * TREASURER SECTION * -->
        <?php include 'collegeCandidateContent/treasurer.php'; ?>
      <!--* TREASURER SECTION * * TREASURER SECTION * * TREASURER SECTION * -->

      <!--* COLLEGE REPRESENTATIVES SECTION * * COLLEGE REPRESENTATIVES SECTION * * COLLEGE REPRESENTATIVES SECTION * -->
        <?php include 'collegeCandidateContent/collegeRepresentative.php'; ?>
      <!--* COLLEGE REPRESENTATIVES SECTION * * COLLEGE REPRESENTATIVES SECTION * * COLLEGE REPRESENTATIVES SECTION * -->

    </div>

  </div>

</div>
</div>


<?php include 'footer.php' ?>