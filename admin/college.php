<?php include 'a-header.php'; ?> 
<?php include 'adminSession.php'; ?>
<title>Admin College</title>
  <link rel="icon" type="image/x-icon" href="../collegeUser/ACLCLOGO/logo3.jpeg">
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
      @media screen and (max-width: 400px) {
        .dashcon{
          transform: scale(0.8, 0.8);
        }
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
              <img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;">
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="college.php" data-toggle="tooltip" data-placement="bottom" title="College Panel">College</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shs.php" data-toggle="tooltip" data-placement="bottom" title="Senior High School Panel">SHS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="a-home.php?q=logout" data-toggle="tooltip" data-placement="bottom" title="Sign out"><i class="fas fa-power-off" style="font-size:24px"></i></a>
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
              <a class="nav-link active" href="college.php"><i class="fa fa-dashboard" style="font-size:18px"></i> Dashboard</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/VOTES/votesReport.php"><i class="fas fa-vote-yea" style="font-size:17px"></i> Votes</a>
            </div>
            <hr class="text-secondary">
            <!--REPORTS END-->

            <!--FILE SELECTION START-->
            <h5 class="text-secondary">MANAGE SELECTIONS</h5>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/FILESELECTION/candidate-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Canditate's Position & Party List</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/FILESELECTION/student-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Student's Year Level & Course</a>
            </div>
            <hr class="text-secondary">
            <!--FILE SELECTION END-->
            
            <!--MANAGE START-->
            <h5 class="text-secondary">MANAGE</h5>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/HOMEPAGE/homeControl.php"> <i class="fa fa-home" style="font-size:22px"></i> Home Page</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/CANDIDATESPAGE/candidatesControl.php"><i class="fas fa-id-card" style="font-size:18px"></i> Candidates</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/VOTERSACCOUNT/votersControl.php"><i class="fa fa-group" style="font-size:18px"></i> Voters Account</a>
            </div>
            <hr class="text-secondary">
            <!--MANAGE END-->

            <!--SETTINGS START-->
            <h5 class="text-secondary">SETTINGS</h5>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/ELECTIONTITLE/titleControl.php"><i class="fa fa-book" style="font-size:18px"></i> Election Title</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="collegeContent/collegeSideNav/TIME/timeControl.php"><i class="fa fa-clock-o" style="font-size:19px"></i> Time</a>
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
                  <a class="nav-link active" href="college.php">Data Reports</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="collegeContent/collegeSideNav/DASHBOARD/userLog.php">User Log</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="collegeContent/collegeSideNav/DASHBOARD/voteLog.php">Vote Log</a>
                </div>

              </div>

            <div class="containter-fluid overflow-auto" style="height: 500px;">

              <div class="con justify-content-around">

                <a href="collegeContent/collegeSideNav/VOTERSACCOUNT/votersControl.php" style="text-decoration: none;">
                  <div class="container p-3 bg-dark border border-light home-content text-light rounded text-center text_shadow dashcon m-5" style="width: 375px;">
                      <div class="d-flex justify-content-between">
                        <div class="col p-3 bg-primary border border-dark rounded-start align-self-center">
                          <i class="fa fa-group" style="font-size: 90px;"></i>
                        </div>
                        <?php
                          include ('../dbconn.php');
                          $sql = "SELECT * FROM clg_voter";
                          $result = $conn->query($sql);
                          $count=$result->num_rows;	
                        ?>

                        <div class="col p-3 bg-secondary border border-dark rounded-end">
                          <div class="fs-2 fw-bolder">
                            <?php echo $count;?>     
                          </div>
                          <div class="col p-1 fs-5 align-self-end border border-dark rounded" style="background-color:red">
                            Voters
                          </div>
                        </div>
                      </div> 
                    <?php 
                      $conn->close();
                    ?>
                  </div>
                </a>

                <a href="collegeContent/collegeSideNav/CANDIDATESPAGE/candidatesControl.php" style="text-decoration: none;">
                  <div class="container p-3 bg-dark border border-light home-content text-light rounded text-center text_shadow dashcon m-5" style="width: 375px;">
                    <?php
                      include ('../dbconn.php');
                      $sql = "SELECT * FROM clg_candidates";
                      $result = $conn->query($sql);
                      $count=$result->num_rows;	
                    ?>

                      <div class="d-flex justify-content-between">
                        <div class="col p-3 bg-primary border border-dark rounded-start align-self-center">
                          <i class="fas fa-id-card" style="font-size: 90px;"></i>
                        </div>

                        <div class="col p-3 bg-secondary border border-dark rounded-end">
                          <div class="fs-2 fw-bolder">
                            <?php echo $count;?>     
                          </div>
                          <div class="col p-1 fs-5 align-self-end border border-dark rounded" style="background-color:red">
                            Candidates
                          </div>
                        </div>
                      </div> 
                    <?php 
                      $conn->close();
                    ?>
                  </div>
                </a>

                <a href="collegeContent/collegeSideNav/VOTERSACCOUNT/votersControl.php" style="text-decoration: none;">
                  <div class="container p-3 bg-dark border border-light home-content text-light rounded text-center text_shadow dashcon m-5" style="width: 375px;">
                      <div class="d-flex justify-content-between">
                        <div class="col p-3 bg-primary border border-dark rounded-start align-self-center">
                          <i class="fas fa-user-check" style="font-size: 90px;"></i>
                        </div>
                        <?php
                          include ('../dbconn.php');
                          $sql = "SELECT * FROM clg_voter WHERE voteStatus = 'Voted'";
                          $result = $conn->query($sql);
                          $count=$result->num_rows;	
                        ?>
  
                        <div class="col p-3 bg-secondary border border-dark rounded-end">
                          <div class="fs-2 fw-bolder">
                            <?php echo $count;?>  
                          </div>
                          <div class="col p-1 fs-5 align-self-end border border-dark rounded" style="background-color:red">
                            Voted
                          </div>
                        </div>
                      </div> 
                    <?php 
                      $conn->close();
                    ?>
                  </div>
                </a>

              
                
              </div>

              
            </div>
          </div>
          <!-- DASHBOARD END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include 'a-footer.php'?>
