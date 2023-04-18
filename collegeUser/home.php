<?php include 'header.php'?>
<?php include 'collegeSession.php'?>
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .imageHome{
        width: 100%;
        
      }

    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
    }
  </style>
</head>
<body>

<div class="nav-head">
<nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
  <div class="container-fluid">
    <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">
    
      <li class="nav-item">
        <a class="nav-link active" href="home.php" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fas fa-home" style="font-size:24px"></i><span class="d-none d-sm-inline"> Home</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="candidates.php" data-toggle="tooltip" data-placement="bottom" title="View Candidates"><i class="fas fa-id-card" style="font-size:24px"></i><span class="d-none d-sm-inline"> Candidates</span></a>
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

    </ul>

  </div>
</nav>

<div class="full-main">
  
  <?php include '../time.php'; ?>

  <div id="darkOverlay" class="dark-overlay" style="display:none;">
    <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
  </div>

  <div class="container-fluid x" id="lockpage">
    <?php include "../schoolLogo.php"?>
  </div>
  
  <hr>

  <?php include '../messageNotice.php'; ?>
  

  <?php include 'userSettingsModals/modalChangepass.php'; ?>
  <?php include 'userSettingsModals/modalEmailVerification.php'; ?>
  <?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>

  
      <div class="container p-3">

        <?php			
          include ('../dbconn.php');
          $sql = "SELECT * FROM clg_title WHERE titlePage='Home'";
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

        <div class="container">

          <!--FILTER START-->
          <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

            <div class="nav-item">
              <a class="nav-link active" data-bs-toggle="pill" href="#informations">Information</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#announcements">Announcement</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#guide">System Guide</a>
            </div>

          </div>

          <!--FILTER END-->
        
          <!--CONTENT START-->
          <div class="tab-content">
            <!--INFORMATION START-->
            <div id="informations" class="tab-pane fade show active"><br>
              <div class="container home-content text-start p-4 px-sm-5 fs-5">
                <h2 class="user-greeting"><?php include '../nav-logo.php'?><strong><b>HELLO, </b> <b style="text-transform: uppercase;"><?php $user->get_fullname($voterID); ?></b>!</strong></h2>
                <hr>
                <?php			
                  include ('../dbconn.php');
                  $sql = "SELECT * FROM clg_home WHERE homecontentID = 'information'";
                  $result = $conn->query($sql);
                                      
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){
                      $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../uploadsHome/" . $row['homeImages'] . "' class='imageHome line-shadow mb-3'>" : "";
                ?>

                  <h4><?php echo nl2br($row['contentHeader'])?></h4>
                  <p><?php echo nl2br($row['content'])?></p>
                  <?php echo $imageVisibility ?>
                  <br>

                <?php	
                  }		
                  $conn->close();
                  }
                ?>
              </div>  
            </div>
            <!--INFORMATION END-->
            
            <!--ANNOUCEMENTS START-->
            <div id="announcements" class="tab-pane fade"><br>
              <div class="container home-content text-start p-4 px-sm-5 fs-5">
                <h2 class="user-greeting"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> Announcements</b></strong></h2>
                  <hr>	

                  <div class="cons">
                    <div class="container home-content p-3 mb-4">

                    <h4><img src="ACLCLOGO/sclogo2.png" alt="School Logo" style="width: 32px; margin-bottom: 5px;"> <b>Student Council Winners</b> <img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px; margin-bottom: 5px;"></h4>

                   
                      <div class="con">

                        <?php
                          include ('../dbconn.php');

                          // Retrieve the candidate with the highest count for President
                          $sql = "SELECT * FROM clg_candidates WHERE position = 'PRESIDENT' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#presidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'collegeCandidateModals/president-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>  

                        <?php
                          include ('../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM clg_candidates WHERE position = 'VICE PRESIDENT' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'collegeCandidateModals/vpresident-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>  

                        <?php
                          include ('../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM clg_candidates WHERE position = 'SECRETARY' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#secretaryModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'collegeCandidateModals/secretary-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>

                        <?php
                          include ('../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM clg_candidates WHERE position = 'TREASURER' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#treasurerModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'collegeCandidateModals/treasurer-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>

                        <?php
                          include ('../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM clg_candidates WHERE position = 'COLLEGE REP' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#collegeRepModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'collegeCandidateModals/collegeRepresentative-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>

                      </div>
                    
                    </div>
                  </div>

                  <?php include '../collegeWinnerResult.php'; ?>

                <?php			
                  include ('../dbconn.php');
                  $sql = "SELECT * FROM clg_home WHERE homecontentID = 'announcement'";
                  $result = $conn->query($sql);
                                      
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){
                      $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../uploadsHome/" . $row['homeImages'] . "' class='imageHome line-shadow mb-5'>" : "";
                ?>
                          
                  <h4><?php echo nl2br($row['contentHeader'])?></h4>
                  <p><?php echo nl2br($row['content'])?></p>
                  <?php echo $imageVisibility ?>
                  <br>

                <?php	
                  }		
                  $conn->close();
                  }
                ?>
                
              </div>  
            </div>
            <!--ANNOUCEMENTS END-->
      
            <!--SYSTEM GUIDE START-->
            <div id="guide" class="tab-pane fade"><br>
              <div class="container text-start home-content p-4 px-sm-5 fs-5">
                <h2 class="user-greeting"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> System Guide</b></strong></h2>

                  <hr>	
                  
                  <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto fs-6" role="tablist" style="height:51px;">
                    <div class="nav-item">
                      <a class="nav-link active" data-bs-toggle="pill" href="#desktopGuide">Desktop Guide</a>
                    </div>
                    <div class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#mobileGuide">Mobile Guide</a>
                    </div>
                  </div>

                  <div class="tab-content">
                    <div id="desktopGuide" class="text-start tab-pane fade show active" style="margin-top: -25px;"><br>
                      <?php			
                        include ('../dbconn.php');
                        $sql = "SELECT * FROM clg_home WHERE homecontentID = 'systemGuide' AND device ='Desktop'";
                        $result = $conn->query($sql);
                                            
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()){
                            $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../uploadsHome/" . $row['homeImages'] . "' class='imageHome line-shadow mb-5'>" : "";
                      ?>
                                
                        <h4><?php echo nl2br($row['contentHeader'])?></h4>
                        <p><?php echo nl2br($row['content'])?></p>
                        <?php echo $imageVisibility ?>
                        <br>

                      <?php	
                        }		
                        $conn->close();
                        }
                      ?>
                    </div>

                    <div id="mobileGuide" class="text-start tab-pane fade" style="margin-top: -25px;"><br>
                      <?php			
                        include ('../dbconn.php');
                        $sql = "SELECT * FROM clg_home WHERE homecontentID = 'systemGuide' AND device ='Mobile'";
                        $result = $conn->query($sql);
                                            
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()){
                            $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../uploadsHome/" . $row['homeImages'] . "' class='imageHome line-shadow mb-5'>" : "";
                      ?>
                                
                        <h4><?php echo nl2br($row['contentHeader'])?></h4>
                        <p><?php echo nl2br($row['content'])?></p>
                        <?php echo $imageVisibility ?>
                        <br>

                      <?php	
                        }		
                        $conn->close();
                        }
                      ?>
                    </div>
                  </div>
              </div>  
            </div>
            <!--SYSTEM GUIDE END--> 
            

          </div>
        </div>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>