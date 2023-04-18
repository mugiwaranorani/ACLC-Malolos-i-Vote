<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<title>Admin SHS</title>
  <link rel="icon" type="image/x-icon" href="../../../../shsUser/ACLCLOGO/logo3.jpeg">
  <style>
      .home-content{
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
        border-radius: 15px;
      }
      .imageHome{
        width: 100%;
      }
    </style>
    <link href="../../../../CSS/style.css" rel="stylesheet">
</head>
<body>
  <!-- NAV START-->
  
  <div class="nav-head">
    <nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
      <div class="container-fluid">
        <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">
        
          <li class="nav-item">
            <a class="navbar-brand" href="../../../a-home.php">
              <img src="../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;">
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../../../college.php" data-toggle="tooltip" data-placement="bottom" title="College Panel">College</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../../../shs.php" data-toggle="tooltip" data-placement="bottom" title="Senior High School Panel">SHS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../../a-home.php?q=logout#" data-toggle="tooltip" data-placement="bottom" title="Sign out"><i class="fas fa-power-off" style="font-size:24px"></i></a>
          </li>

        </ul>

      </div>
    </nav>
  <!-- NAV END -->
  <!-- CONTENT START -->
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-sm-3 p-2">

        <div class="nav nav-pills flex-column bg-dark p-3 rounded" role="tablist">

          <div class="container d-flex justify-content-between">
          <h2 class="text-secondary"><strong><b><i class='fas fa-database' style='font-size:40px'></i> SENIOR HS</strong></b></h2> <i class="fa fa-navicon text-white" style="font-size:36px"></i>
          </div>
          <br>
          <div class="container-fluid overflow-auto" style="height: 550px;"> <!-- overflow-auto" style="height: 550px;" (insert inside if needed<--------------) -->
            <!--REPORTS START-->
            <h5 class="text-secondary">REPORTS</h5>
            <div class="nav-item">
              <a class="nav-link" href="../../../shs.php"><i class="fa fa-dashboard" style="font-size:18px"></i> Dashboard</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../VOTES/votesReport.php"><i class="fas fa-vote-yea" style="font-size:17px"></i> Votes</a>
            </div>
            <hr class="text-secondary">
            <!--REPORTS END-->

            <!--FILE SELECTION START-->
            <h5 class="text-secondary">MANAGE SELECTIONS</h5>
            <div class="nav-item">
              <a class="nav-link" href="../FILESELECTION/candidate-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Canditate's Position & Party List</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../FILESELECTION/student-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Student's Year Level & Strand</a>
            </div>
            <hr class="text-secondary">
            <!--FILE SELECTION END-->
            
            <!--MANAGE START-->
            <h5 class="text-secondary">MANAGE</h5>
            <div class="nav-item">
              <a class="nav-link  active" href="homeControl.php"> <i class="fa fa-home" style="font-size:22px"></i> Home Page</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../CANDIDATESPAGE/candidatesControl.php"><i class="fas fa-id-card" style="font-size:18px"></i> Candidates</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../VOTERSACCOUNT/votersControl.php"><i class="fa fa-group" style="font-size:18px"></i> Voters Account</a>
            </div>
            <hr class="text-secondary">
            <!--MANAGE END-->

            <!--SETTINGS START-->
            <h5 class="text-secondary">SETTINGS</h5>
            <div class="nav-item">
              <a class="nav-link" href="../ELECTIONTITLE/titleControl.php"><i class="fa fa-book" style="font-size:18px"></i> Election Title</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../TIME/timeControl.php"><i class="fa fa-clock-o" style="font-size:19px"></i> Time</a>
            </div>
            <!--SETTINGS END-->

          </div>

        </div>
      </div>
      <!-- SIDE CONTENT END-->
      <!-- MAIN CONTENT START-->
      <div class="col-sm-9">

          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class='fa fa-home' style='font-size:50px'></i> HOME</b></i></strong></b></h1>
            <hr>

            <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

              <div class="nav-item">
                <a class="nav-link" href="homeControl.php">Information</a>
              </div>
              <div class="nav-item">
                <a class="nav-link active" href="announcements.php">Announcement</a>
              </div>
              <div class="nav-item">
                <a class="nav-link" href="systemGuide.php">System Guide</a>
              </div>
                
            </div>

            <div class="container-fluid overflow-auto p-1" style="height: 500px;">
              
              <div class="container home-content p-3">
                <h3 class="user-greeting"><img src="../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> Announcements</b></strong></h3>

                  <hr>	

                  <div class="container-fluid mb-2" style="margin-left: -12px;">
                    <button class="btn btn-outline-primary mb-3" id="showResultsBtn" style="display: none;">Show Final Vote Result</button>
                    <button class="btn btn-outline-danger mb-3" id="hideResultsBtn">Hide Final Vote Result</button>
                  </div>

                  <div class="cons">
                    <div class="container home-content p-3 mb-4">

                    <h4><img src="../../../ACLCLOGO/sclogo2.png" alt="School Logo" style="width: 32px; margin-bottom: 5px;"> <b>Student Council Winners</b> <img src="../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px; margin-bottom: 5px;"></h4>

                   
                      <div class="con">

                        <?php
                          include ('../../../../dbconn.php');

                          // Retrieve the candidate with the highest count for President
                          $sql = "SELECT * FROM shs_candidates WHERE position = 'PRESIDENT' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'announcements-collegeCandidateModals/vpresident-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>  

                        <?php
                          include ('../../../../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM shs_candidates WHERE position = 'VICE PRESIDENT' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'announcements-collegeCandidateModals/vpresident-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>  

                        <?php
                          include ('../../../../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM shs_candidates WHERE position = 'SECRETARY' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'announcements-collegeCandidateModals/vpresident-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>

                        <?php
                          include ('../../../../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM shs_candidates WHERE position = 'TREASURER' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'announcements-collegeCandidateModals/vpresident-Modal.php'; ?>
                              <!--MODAL PROFILE-->
                            </div>
                          </div>
                        <?php
                          }

                          $conn->close();
                        ?>

                        <?php
                          include ('../../../../dbconn.php');

                          // Retrieve the candidate with the highest count for Vice President
                          $sql = "SELECT * FROM shs_candidates WHERE position = 'COLLEGE REP' ORDER BY voteCount DESC LIMIT 1";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                        ?>
                          <div class="card card_size" style="height: 500px; width: 500px;">
                            <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image">
                            <div class="card-body">
                              <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                              <p class="card-text">Name: <?php echo $row['name']?></p>
                              <button data-bs-toggle="modal" data-bs-target="#vicePresidentModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                              <!--MODAL PROFILE-->
                              <?php include 'announcements-collegeCandidateModals/vpresident-Modal.php'; ?>
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
                  
                      <?php			
                        include ('../../../../dbconn.php');
                        $sql = "SELECT * FROM shs_home WHERE homecontentID = 'announcement'";
                        $result = $conn->query($sql);
                                            
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()){
                            $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../../../../uploadsHome/" . $row['homeImages'] . "' class='imageHome mb-3'>" : "";
                      ?>
                          
                        <div class="container home-content p-3">
                          <h4><?php echo nl2br($row['contentHeader'])?></h4>
                          <p><?php echo nl2br($row['content'])?></p>
                          <?php echo $imageVisibility ?>
                            <div class="d-flex flex-row-reverse">
                              <form action="#" methd="POST">
                                <a class="btn btn-primary px-4" href="announcements-Edit.php?id='<?php echo $row['homeID']?>'">Edit</a>
                                <a class="btn btn-danger px-3" href="announcements-Delete.php?id='<?php echo $row['homeID']?>'">Delete</a>
                              </form>
                            </div>
                        </div>

                        <br>

                      <?php	
                        }		
                        $conn->close();
                        }
                      ?>

                      <form action="announcements-Add.php" methd="POST">
                        <button class="btn btn-outline-primary">Add Content</button>
                      </form>

              </div> 

                <?php include '../../../../collegeWinnerResult.php'; ?>

            </div>
          </div>

      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
