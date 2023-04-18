<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<title>Admin College</title>
  <link rel="icon" type="image/x-icon" href="../../../../collegeUser/ACLCLOGO/logo3.jpeg">
    <style>
      .home-content{
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
            <a class="nav-link active" href="../../../college.php" data-toggle="tooltip" data-placement="bottom" title="College Panel">College</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="../../../shs.php" data-toggle="tooltip" data-placement="bottom" title="Senior High School Panel">SHS</a>
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
              <a class="nav-link" href="../../../college.php"><i class="fa fa-dashboard" style="font-size:18px"></i> Dashboard</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../VOTES/votesReport.php"><i class="fas fa-vote-yea" style="font-size:17px"></i> Votes</a>
            </div>
            <hr class="text-secondary">
            <!--REPORTS END-->

            <!--FILE SELECTION START-->
            <h5 class="text-secondary">MANAGE SELECTIONS</h5>
            <div class="nav-item">
              <a class="nav-link" href="candidate-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Canditate's Position & Party List</a>
            </div>
            <div class="nav-item">
              <a class="nav-link active" href="student-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Student's Year Level & Course</a>
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
          <!-- STUDENT INFO START -->
          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class='fas fa-file' style='font-size:40px'></i> FILE - YEAR LEVEL AND COURSE</i></strong></b></h1>
            <hr>
            <div class="container-fluid overflow-auto text-center" style="height: 560px;">
              
              <!--LEFT DIV START-->
              <?php			
                include ('../../../../dbconn.php');
                //DB QUERY FOR YEAR LEVEL SELECTION FILE
                $sql = "SELECT * FROM clg_ylselection";
                $result = $conn->query($sql);
              ?>

              <div class="col-sm-12 p-2">

                <div class="container bg-light home-content p-3">
                  <h2><b><i class='fas fa-file' style='font-size:28px'></i> YEAR LEVEL SELECTION</b></h2>
                  <hr>
                    
                    <table class="table table-responsive table-info home-content table-hover table-secondary rounded text-center overflow-hidden">
                      <thead>
                        <tr>
                          <th scope="col">File Content</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php //FETCH DATA
                          if ($result->num_rows > 0) { 
                          while($row = $result->fetch_array()) {
                        ?>
                        <tr>
                          <td><?php echo $row['yearLevel']?></td>
                          <th><a class="btn btn-primary px-4" href="student-edit-yearLevel-form.php?id='<?php echo $row['yearLevelID']?>'">Edit</a></th>
                          <th><a class="btn btn-danger px-3" href="student-delete-yearLevel.php?id='<?php echo $row['yearLevelID']?>'">Delete</a></th>
                        </tr>
                        <?php
                        
                        }//CLOSE YEAR LEVEL SELECTION DB
                          $conn->close();
                        }
                        ?>  

                        <form action="student-add-Yearlevel-form.php" method="post">
                          <button class="btn btn-outline-primary d-flex flex-row-start">Add New Year Level</button>
                        </form>
                        <br>
                      </tbody>
                    </table>
                      
                    <?php			
                      include ('../../../../dbconn.php');
                      //DB QUERY FOR SELECTION OUTPUT
                      $sql = "SELECT * FROM clg_ylselection";
                      $result = $conn->query($sql);
                    ?>
                  <hr>
                  <h4>Output:</h4>
                      <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                        <option selected>Select year level...</option>
                      
                        <?php //FETCH YEAR LEVEL SELECTION DATA AGAIN
                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                        ?>

                          <option value="<?php echo $row['yearLevel']?>"><?php echo $row['yearLevel']?></option>

                        <?php	
                          }		
                          $conn->close();
                          } //CLOSE YEAR LEVEL SELECTION DB
                        ?>
                      </select>
                </div>

              </div>
              <!--LEFT DIV END-->
              <!--RIGHT DIV START-->
              <?php			
                include ('../../../../dbconn.php');
                //DB QUERY FOR COURSE SELECTION
                $sql = "SELECT * FROM clg_courseselection";
                $result = $conn->query($sql);
              ?>

              <div class="col-sm-12 p-2">
                <div class="container home-content p-3">
                  <h2><b><i class='fas fa-file' style='font-size:28px'></i> COURSE SELECTION</b></h2>
                  <hr>

                    <table class="table table-responsive table-info home-content table-hover table-secondary rounded text-center overflow-hidden">
                      <thead>
                        <tr>
                          <th scope="col">File Content</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php //FETCH DATA
                          if ($result->num_rows > 0) { 
                          while($row = $result->fetch_array()) {
                        ?>
                        <tr>
                          <td><?php echo $row['course']?></td>
                          <th><a class="btn btn-primary px-4" href="student-edit-course-form.php?id='<?php echo $row['courseID']?>'">Edit</a></th>
                          <th><a class="btn btn-danger px-3" href="student-delete-course.php?id='<?php echo $row['courseID']?>'">Delete</a></th>
                        </tr>
                        <?php
                        
                        }//CLOSE COURSE SELECTION DB
                          $conn->close();
                        }
                        ?>  

                        <form action="student-add-course-form.php" method="post">
                          <button class="btn btn-outline-primary d-flex flex-row-start">Add New Course</button>
                        </form>
                        <br>
                      </tbody>
                    </table>
                    <hr>

                    <?php			
                      include ('../../../../dbconn.php');
                      //DB QUERY FOR COURSE SELECTION OUTPUT
                      $sql = "SELECT * FROM clg_courseselection";
                      $result = $conn->query($sql);
                    ?>
                    <h4>Output:</h4>
                      <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                        <option selected>Select course...</option>
                        <?php // FETCH THE DATA FOR COURSE OUTPUT
                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                        ?>
                        <option value="<?php echo $row['course'];?>"><?php echo $row['course'];?></option>
                        <?php	
                          }
                          $conn->close();
                          }//CLOSE DB
                        ?> 
                      </select>

                </div>
              </div>
              <!--RIGHT DIV END-->

            </div>
          </div>
          <!-- STUDENT INFO END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
