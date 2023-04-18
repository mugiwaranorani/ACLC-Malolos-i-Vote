<?php include '../../../a-header.php'?>
<?php include '../adminSession.php'; ?>
<title>Admin SHS</title>
  <link rel="icon" type="image/x-icon" href="../../../../shsUser/ACLCLOGO/logo3.jpeg">
    <style>
      .home-content{
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
        border-radius: 15px;
      }
      .home-content:hover{
        opacity: 0.8;
      }
      .home-content:active{
        opacity: 0.6;
      }
			.text_shadow{
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
      }
			.line-shadow{
				box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
			}
			.container-hover:hover{
				background-color: #292b2c;
				color: white;
				border:1px solid;
			}
    </style>
    <link href="../CSS/style.css" rel="stylesheet">
</head>
<body>
  <!-- NAV START-->
  
  <div class="nav-head">
    <nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
      <div class="container-fluid">
        <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">
        
          <li class="nav-item">
            <a class="navbar-brand" href="a-home.php">
              <img src="../../../../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;">
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
          <h2 class="text-secondary"><strong><b><i class='fas fa-database' style='font-size:40px'></i> COLLEGE</strong></b></h2> <i class="fa fa-navicon text-white" style="font-size:36px"></i>
          </div>
          <br>
          <div class="container-fluid overflow-auto" style="height: 550px;"> <!-- overflow-auto" style="height: 550px;" (insert inside if needed<--------------) -->
            <!--REPORTS START-->
            <h5 class="text-secondary">REPORTS</h5>
            <div class="nav-item">
              <a class="nav-link active" href="../../../college.php"><i class="fa fa-dashboard" style="font-size:18px"></i> Dashboard</a>
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
            <h1><strong><b><i><i class="fa fa-dashboard" style="font-size:50px"></i> DASHBOARD</strong></b></i></h1>
            <hr>

              <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

                <div class="nav-item">
                  <a class="nav-link" href="../../../shs.php">Data Reports</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link active" href="userLog.php">User Log</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="voteLog.php">Vote Log</a>
                </div>

              </div>

              <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <form action="#searchResult" method="post" class="d-flex">
                  <input class="form-control me-2" type="search" name="search" placeholder="Search here..." aria-label="Search" style="border: 1px solid;">
                  <button type="submit" name="searchbtn" class="btn btn-outline-success">Search</button>
                </form>
              </div>

              <h3><i>LOG IN REPORTS</i></h3>

            <div class="containter-fluid overflow-auto" style="height: 403px;">
							<div class="d-flex flex-column p-1">

                <?php
                if (isset($_POST['searchbtn'])) {
                  $search = $_POST['search'];
                  
                  include ('../../../../dbconn.php');
                ?>
                
                <?php
                    $sql = "SELECT * FROM shs_userlog WHERE voterID LIKE '%{$search}%' OR logName LIKE '%{$search}%' OR logUSN LIKE '%{$search}%'  OR loginTime LIKE '%{$search}%' ORDER BY loginTime DESC";
                    $result = mysqli_query($conn, $sql);
                    $count=$result->num_rows;

                    if (mysqli_num_rows($result) > 0) {
                ?>
                    <div class="container rounded line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="userLog.php">Clear Search</a>
                    </div>

                    <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                  
                    <div class="container container-hover line-shadow rounded d-flex justify-content-between mb-2 p-3">
                      <div class="fs-2">
                        <i class='fas fa-user-circle' style='font-size:50px'></i> <?php echo $row['logName'];?> - <?php echo $row['logUSN'];?>
                      </div>
                      <div class="fs-6">
                        <?php echo $row['loginTime'];?>
                      </div>
                    </div>

                    <?php
                      }
                      $conn->close();
                      }else{
                    ?>

                    <div class="container rounded line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="userLog.php">Clear Search</a>
                    </div>
                
                <?php
                    }
                  }else{
                ?>

                <?php
                  include ('../../../../dbconn.php');						
                    
                  $query=mysqli_query($conn,"SELECT * FROM shs_userlog ORDER BY loginTime DESC");
                  $cnt=1;
                  while($row=mysqli_fetch_array($query)) {
                ?>
								<div class="container container-hover line-shadow rounded d-flex justify-content-between mb-2 p-3">
									<div class="fs-2">
										<i class='fas fa-user-circle' style='font-size:50px'></i> <?php echo $row['logName'];?> - <?php echo $row['logUSN'];?>
									</div>
									<div class="fs-6">
                    <?php echo $row['loginTime'];?>
									</div>
								</div>
                <?php 
                  $cnt=$cnt+1; } 
                }
                ?>


							</div>
            </div>
          </div>
          <!-- DASHBOARD END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
