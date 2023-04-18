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
                <a class="nav-link" href="votesReport.php">Candidates Vote</a>
              </div>
              <div class="nav-item">
                <a class="nav-link active" href="voterStatusReport.php">Voters Status</a>
              </div>
                
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
                ?><p style="float:right; margin-bottom: -15px;" class="fs-2"><i class="fa-solid fa-user-check" style="font-size:30px"></i> Voted Status: <?php echo $votedCount; ?>/<?php echo $voterCount; ?></p>
                
              </div>
            <div class="container-fluid overflow-auto" style="height: 400px;">
              <br>

              <table class="table table-responsive table-dark table-hover table-bordered table-secondary rounded text-center overflow-hidden">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">USN</th>
                    <th scope="col">Vote Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                    if (isset($_POST['searchbtn'])) {
                      $search = $_POST['search'];

                      include ('../../../../dbconn.php');
                
                      $sql = "SELECT * FROM shs_voter WHERE voterID LIKE '%{$search}%' OR fullName LIKE '%{$search}%' OR usn LIKE '%{$search}%'  OR voteStatus LIKE '%{$search}%'";
                      $result = mysqli_query($conn, $sql);
                      $count=$result->num_rows;
                      $i = 1;
                  ?>
                      <?php
                      if (mysqli_num_rows($result) > 0) {
                      ?>

                      <div class="container line-shadow p-3 mb-4">
                        <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                        <a class="btn btn-outline-danger" href="voterStatusReport.php">Clear Search</a>
                      </div>

                      <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>

                    <tr>
                      <td><?php echo $row['voterID']?></td>
                      <td><?php echo $row['fullName']?></td>
                      <td><?php echo $row['usn']?></td>
                      <td><?php echo $row['voteStatus']?></td>
                    </tr>
                  <?php
                    $i++;
                  }
                    $conn->close();
                  }else{
                  ?>
                    <div class="container line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="voterStatusReport.php">Clear Search</a>
                    </div>
              <?php
                  }
                }else{
              ?>
                <?php			
                include ('../../../../dbconn.php');
          
                $sql = "SELECT * FROM shs_voter";
                $result = $conn->query($sql);
                $i = 1;
              ?>
                  <?php if ($result->num_rows > 0) { 
                    while($row = $result->fetch_array()) {?>
                    <tr>
                      <td><?php echo $row['voterID']?></td>
                      <td><?php echo $row['fullName']?></td>
                      <td><?php echo $row['usn']?></td>
                      <td><?php echo $row['voteStatus']?></td>
                    </tr>
                  <?php
                    $i++;
                  }
                    $conn->close();
                  }
                  ?>
                    
                </tbody>
              </table>
              <?php
                }
              ?>
                  
                </tbody>
              </table>
              
            </div>
          </div>
          <!-- DASHBOARD END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
