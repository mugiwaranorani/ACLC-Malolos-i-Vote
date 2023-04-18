<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<title>Admin College</title>
  <link rel="icon" type="image/x-icon" href="../../../../collegeUser/ACLCLOGO/logo3.jpeg">
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
              <a class="nav-link" href="../FILESELECTION/candidate-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Canditate's Position & Party List</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="../FILESELECTION/student-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Student's Year Level & Course</a>
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
              <a class="nav-link active" href="votersControl.php"><i class="fa fa-group" style="font-size:18px"></i> Voters Account</a>
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
            <h1><strong><b><i><i class='fa fa-group' style='font-size:40px'></i> VOTERS ACCOUNT</i></strong></b></h1>
            <hr>

            <div class="container mb-2 d-flex flex-md-row flex-sm-column flex-xs-column justify-content-between p-2" style="margin-top: -5px;">
              <form action="voter-add-form.php" methd="POST">
                <button class="btn btn-outline-primary">Add New Account</button>
              </form>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <form action="#searchResult" method="post" class="d-flex">
                  <input class="form-control me-2" type="search" name="search" placeholder="Search here..." aria-label="Search" style="border: 1px solid;" required>
                  <button class="btn btn-outline-success" name="searchbtn" type="submit">Search</button>
                </form>
              </div>
            </div>

            <div class="container p-2">
              <form action="votersControl.php" methd="POST">
                <button class="btn btn-outline-success">Back to Main View Details</button>
              </form>
            </div>

            <div class="container-fluid overflow-auto" style="height: 448px;">
            
              <br>
              
              <table class="table table-responsive table-dark table-hover table-bordered table-secondary rounded text-center overflow-hidden">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Year Level</th>
                    <th scope="col">Course</th>
                    <th scope="col">USN</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email (Verified)</th>
                    <th scope="col">Date Created</th>
                    <th colspan="2">Action</th>
                  </tr>
                </thead>
              <tbody>

              <?php
                if (isset($_POST['searchbtn'])) {
                  $search = $_POST['search'];

                  include ('../../../../dbconn.php');
            
                  $sql = "SELECT * FROM clg_voter WHERE voterID LIKE '%{$search}%' OR fullName LIKE '%{$search}%' OR usn LIKE '%{$search}%' OR course LIKE '%{$search}%' OR yearLevel LIKE '%{$search}%' OR email LIKE '%{$search}%' OR voteStatus LIKE '%{$search}%'";
                  $result = mysqli_query($conn, $sql);
                  $count=$result->num_rows;
                  $i = 1;
              ?>
                  <?php
                   if (mysqli_num_rows($result) > 0) {
                  ?>

                  <div class="container line-shadow p-3 mb-4">
                    <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                    <a class="btn btn-outline-danger" href="voter-fullview.php">Clear Search</a>
                  </div>

                  <?php
                     while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr>
                      <td><?php echo $row['voterID']?></td>
                      <td><?php echo $row['fullName']?></td>
                      <td><?php echo $row['yearLevel']?></td>
                      <td><?php echo $row['course']?></td>
                      <td><?php echo $row['usn']?></td>
                      <td><?php echo $row['vpass']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['dateCreated']?></td>
                      <th><a class="btn btn-primary px-4" href="voter-edit-form.php?id='<?php echo $row['voterID']?>'">Edit</a></th>
                      <th><a class="btn btn-danger px-3" href="voter-delete.php?id='<?php echo $row['voterID']?>'">Delete</a></th>
                    </tr>
                  <?php
                    $i++;
                  }
                    $conn->close();
                    }else{ 
                  ?>

                  <div class="container line-shadow p-3 mb-4">
                    <h3> Search Result: "<?php echo $search; ?>" <?php echo $count; ?> item(s) Found!</h3>									
                    <a class="btn btn-outline-danger" href="voter-fullview.php">Clear Search</a>
                  </div>

                  <?php
                  }
                }else{

                  include ('../../../../dbconn.php');
            
                  $sql = "SELECT * FROM clg_voter";
                  $result = $conn->query($sql);
                  $i = 1;

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                  ?>
                    <tr>
                      <td><?php echo $row['voterID']?></td>
                      <td><?php echo $row['fullName']?></td>
                      <td><?php echo $row['yearLevel']?></td>
                      <td><?php echo $row['course']?></td>
                      <td><?php echo $row['usn']?></td>
                      <td><?php echo $row['vpass']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['dateCreated']?></td>
                      <th><a class="btn btn-primary px-4" href="voter-edit-form.php?id='<?php echo $row['voterID']?>'">Edit</a></th>
                      <th><a class="btn btn-danger px-3" href="voter-delete.php?id='<?php echo $row['voterID']?>'">Delete</a></th>
                    </tr>
                    
                    <?php	
                          $i++; 
                        }		
                          $conn->close();
                        }
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
