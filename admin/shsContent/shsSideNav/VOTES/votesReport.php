<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<link href="../../../../CSS/style.css" rel="stylesheet">
  <style>
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
      border-radius: 15px;
    }
  </style>
<title>Admin SHS</title>
  <link rel="icon" type="image/x-icon" href="../../../../shsUser/ACLCLOGO/logo3.jpeg">
</head>
<body>
  <!-- NAV START-->
  
  <div class="nav-head">
    <nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
      <div class="container-fluid">
        <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">
        
          <li class="nav-item">
            <a class="navbar-brand" href="../../../a-home.php" data-toggle="tooltip" data-placement="bottom" title="Home">
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
              <a class="nav-link active" href="votesReport.php"><i class="fas fa-vote-yea" style="font-size:17px"></i> Votes</a>
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
          <!-- DASHBOARD START-->
          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class="fas fa-vote-yea" style="font-size:49px"></i> VOTES REPORT</strong></b></i></h1>
            <hr>

            <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

              <div class="nav-item">
                <a class="nav-link active" href="votesReport.php">Candidates Vote</a>
              </div>
              <div class="nav-item">
                <a class="nav-link" href="voterStatusReport.php">Voters Status</a>
              </div>  
                
            </div>

            <div class="mb-1">
              <a href="../../../../shsResultView.php" target="_blank" class="btn btn-outline-danger">Slide Show (TV View)</a>
            </div>

              <div class="container p-2">
                <div class="col-sm-4">
                  <form action="#searchResult" method="post" class="d-flex">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search Name" aria-label="Search" style="border: 1px solid;" required>
                    <button class="btn btn-outline-success" name="searchbtn" type="submit">Search</button>
                  </form>
                </div>
              </div>
              <div class="container fs-4">
                <?php
                  include ('../../../../dbconn.php');

                  $voterCountQuery = "SELECT * FROM shs_voter";
                  $voterResult = $conn->query($voterCountQuery);
                  $voterCount=$voterResult->num_rows;	

                  $votedCountQuery = "SELECT voteStatus FROM shs_voter WHERE voteStatus = 'Voted'";
                  $votedCountResult = $conn->query($votedCountQuery);
                  $votedCount=$votedCountResult->num_rows;	
                ?>
                <p style="margin-bottom: -3px;"><i class="fa-solid fa-user-check" style="font-size:25px;"></i> Voted Status: <?php echo $votedCount; ?>/<?php echo $voterCount; ?></p>
              </div>
            <div class="container-fluid overflow-auto" style="height: 376px;">
              <br>
            <?php
              if (isset($_POST['searchbtn'])) {
                $search = $_POST['search'];
            ?>
              
              <table class="table table-responsive table-hover table-dark rounded" style="overflow: hidden;">
                <thead>
                  <tr>
                    <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Party List</th>
                    <th scope="col">Vote(s)</th>
                  </tr>
                </thead>
                <tbody>
              
                  <?php
                    include ('../../../../dbconn.php');

                    $positions = array('PRESIDENT', 'VICE PRESIDENT', 'SECRETARY', 'TREASURER', 'AUDITOR', 'G-11 REP', 'G-12 REP');
                      
                      // Loop through the positions and get the maximum vote count for each position
                      foreach ($positions as $position) {
                        $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = '$position'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $max_vote_counts[$position] = $row['max_vote_count'];
                      }
                    
                    $searchQuery = "SELECT * FROM shs_candidates WHERE name LIKE '%{$search}%' OR position LIKE '%{$search}%' OR partyList LIKE '%{$search}%'  OR voteCount LIKE '%{$search}%'";
                    $searchResult = mysqli_query($conn, $searchQuery);
                    $searchCount=$searchResult->num_rows;
                    $i = 1;
                    
                    if (mysqli_num_rows($searchResult) > 0) {
                  ?>

                    <div class="container line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $searchCount; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="votesReport.php">Clear Search</a>
                    </div>

                  <?php
                    while ($row = mysqli_fetch_assoc($searchResult)) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && in_array($position, $positions) && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                  ?>

                    <tr>
                      <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['position']?></td>
                      <td><?php echo $row['partyList']?></td>
                      <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                    </tr>

                  <?php
                    $i++;
                    }
                    $conn->close();
                    }else{
                  ?>

                    <div class="container line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $searchCount; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="votesReport.php">Clear Search</a>
                    </div>

                  <?php
                    }
                  ?>

                </tbody>
              </table>

            <?php
              }else{
            ?>
            <h3><i>PRESIDENT(S)</i></h3>

            <table class="table table-responsive table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>

              <tbody>
                <?php			
                  include ('../../../../dbconn.php');

                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'PRESIDENT'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['PRESIDENT'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'PRESIDENT'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'PRESIDENT' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>VICE PRESIDENT(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'VICE PRESIDENT'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['VICE PRESIDENT'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'VICE PRESIDENT'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'VICE PRESIDENT' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>SECRETARY(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>

                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'SECRETARY'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['SECRETARY'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'SECRETARY'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'SECRETARY' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>TREASURER(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'TREASURER'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['TREASURER'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'TREASURER'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'TREASURER' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>AUDITOR REPRESENTATIVE(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'AUDITOR'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['AUDITOR'] = $row['max_vote_count'];
                  
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'AUDITOR'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'AUDITOR' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>GRADE 11 REPRESENTATIVE(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['G-11 REP'] = $row['max_vote_count'];
                  
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'G-11 REP' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>GRADE 12 REPRESENTATIVE(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../../../../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'G-12 REP'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['G-12 REP'] = $row['max_vote_count'];
                  
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'G-12 REP'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'G-12 REP' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../../../../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <?php
              }
            ?>
              
            </div>
          </div>
          <!-- DASHBOARD END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
