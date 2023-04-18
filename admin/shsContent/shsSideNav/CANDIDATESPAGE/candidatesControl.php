<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<link href="../../../../CSS/style.css" rel="stylesheet">
<title>Admin SHS</title>
  <link rel="icon" type="image/x-icon" href="../../../../shsUser/ACLCLOGO/logo3.jpeg">
  <style>
      .line-shadow{
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
        border-radius: 15px;
      }
    </style>
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
            <a class="nav-link" href="../../../a-home.php?q=logout" data-toggle="tooltip" data-placement="bottom" title="Sign out"><i class="fas fa-power-off" style="font-size:24px"></i></a>
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
              <a class="nav-link" href="../HOMEPAGE/homeControl.php"> <i class="fa fa-home" style="font-size:22px"></i> Home Page</a>
            </div>
            <div class="nav-item">
              <a class="nav-link active" href="candidatesControl.php"><i class="fas fa-id-card" style="font-size:18px"></i> Candidates</a>
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
          <!-- DASHBOARD START-->
          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class='fas fa-id-card' style='font-size:40px'></i> CANDIDATES</i></strong></b></h1>
            <hr>
            <div class="container d-flex flex-md-row flex-sm-column flex-xs-column justify-content-between p-2" style="margin-top: -5px;">
              <form action="candidate-add.php" methd="POST">
                <button class="btn btn-outline-primary">Add New Candidate</button>
              </form>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <form action="#searchresult" method="post" class="d-flex">
                  <input class="form-control me-2" name="search" type="search" placeholder="Search Name" aria-label="Search" style="border: 1px solid;" required>
                  <button class="btn btn-outline-success" name="searchbtn" type="submit">Search</button>
                </form>
              </div>
            </div>

            <div class="container-fluid overflow-auto" id="searchresult" style="height: 510px;">
            <br>
              <div class="con">

                <?php			
                if (isset($_POST['searchbtn'])) {
                  $search = $_POST['search'];

                  include ('../../../../dbconn.php');
                  
                  $sql = "SELECT * FROM shs_candidates WHERE name LIKE '%{$search}%' OR position LIKE '%{$search}%' OR yearLvl LIKE '%{$search}%' OR partyList LIKE '%{$search}%'";
                  $result = $conn->query($sql);
                  $count=$result->num_rows;
                          
                  if ($result->num_rows > 0) {
                ?>

                  <div class="container line-shadow p-3 mb-4">
                    <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                    <a class="btn btn-outline-danger" href="candidatesControl.php">Clear Search</a>
                  </div>

                <?php
                    while($row = $result->fetch_array()) {
                ?>

                <div class="card card_size" style="height: 500px; width: 500px;">

                  <a href="candidadate-delete.php?id='<?php echo $row['candidateID']?>'" class="position-absolute top-0 start-100 translate-middle rounded-circle btn btn-danger border border-dark">
                    <i class="fa fa-remove" style="font-size:32px"></i>
                    <span class="visually-hidden">Delete</span>
                  </a>

                  <a href="candidate-edit.php?id='<?php echo $row['candidateID']?>'" class="position-absolute top-0 start-100 translate-middle rounded-circle btn btn-info border border-dark" style="margin-top: 50px;">
                    <i class="fas fa-edit fs-5" style="height: 27px; width:20px; margin-left: 3px; margin-top: 5px; color:white;"></i>
                    <span class="visually-hidden">Edit</span>
                  </a>

                  <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image" style="height: 350px;">
                    <div class="card-body">
                      <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                      <p class="card-text">Name: <?php echo $row['name']?></p>
                      <button data-bs-toggle="modal" data-bs-target="#profileModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                      <!--MODAL PROFILE-->
                      <?php include 'candidatesModalProfileCopy.php'?>
                        <!--MODAL PROFILE-->
                    </div>

                </div>

                <?php	
                  }		
                  $conn->close();
                ?>  
                <?php } else { ?>

                  <div class="container line-shadow p-3 mb-4">
                    <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                    <a class="btn btn-outline-danger" href="candidatesControl.php">Clear Search</a>
                  </div>

                <?php }
                  } else {
                ?>	
              
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $sql = "SELECT * FROM shs_candidates";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                ?>

                <div class="card card_size" style="height: 500px; width: 500px;">

                  <a href="candidadate-delete.php?id='<?php echo $row['candidateID']?>'" class="position-absolute top-0 start-100 translate-middle rounded-circle btn btn-danger border border-dark">
                    <i class="fa fa-remove" style="font-size:32px"></i>
                    <span class="visually-hidden">Delete</span>
                  </a>

                  <a href="candidate-edit.php?id='<?php echo $row['candidateID']?>'" class="position-absolute top-0 start-100 translate-middle rounded-circle btn btn-info border border-dark" style="margin-top: 50px;">
                    <i class="fas fa-edit fs-5" style="height: 27px; width:20px; margin-left: 3px; margin-top: 5px; color:white;"></i>
                    <span class="visually-hidden">Edit</span>
                  </a>

                  <img class="card-img-top candidate_img" src="../../../../uploads/<?php echo $row['picture']?>" alt="candidate image" style="height: 350px;">
                    <div class="card-body">
                      <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
                      <p class="card-text">Name: <?php echo $row['name']?></p>
                      <button data-bs-toggle="modal" data-bs-target="#profileModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
                      <!--MODAL PROFILE-->
                      <?php include 'candidatesModalProfileCopy.php'?>
                        <!--MODAL PROFILE-->
                    </div>

                </div>

                    <?php	
                            }		
                            $conn->close();
                          }
                        ?>
                </div>

                    <?php } ?>


                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- DASHBOARD END-->
    </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
