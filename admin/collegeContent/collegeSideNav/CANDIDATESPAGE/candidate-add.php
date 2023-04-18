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

            <div class="container-fluid overflow-auto" style="height: 560px;">
              <br>
              <div class="container line-shadow p-3">

                <h3><i class='fas fa-user-plus' style='font-size:30px'></i> ADD NEW CANDIDATE</h3>
                <hr>
                  
                  <form action="candidate-add-result.php" method="post" enctype="multipart/form-data">

                    <label class="text-danger"><h5>Note: The numbers beside the labels, indicates the maximum letters/characters that you can input in each form.</h5></label>

                    <!-- IMAGE UPLOAD START -->
                    <div class="container text-center">
                      <label class="fs-5 mb-2">Select image to upload: </label><br>
                      <img id="preview" src="../../../../uploads/defaultIMG.jpg" alt="" style="width: 300px; height: 350px; object-fit: cover;" class="mb-3 line-shadow">

                      <script>
                        function previewImage() {
                          var preview = document.querySelector('#preview');
                          var file = document.querySelector('#imageToUpload').files[0];
                          var reader = new FileReader();

                          reader.addEventListener("load", function () {
                            preview.src = reader.result;
                          }, false);

                          if (file) {
                            reader.readAsDataURL(file);
                          }
                        }
                      </script>
                      
                      <br>

                      <input type="file" name="imageToUpload" id="imageToUpload" onchange="previewImage()" class="mb-3">
                    </div>
                    <!-- IMAGE UPLOAD END -->

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="fname" name="fname" maxlength="18" placeholder="title here" value="" required>
                      <label for="floatingInput">Full Name <span class="text-danger">(18)</span>:</label>
                    </div>

                    <!-- POSITION SELECTION START -->
                    <?php			
                      include ('../../../../dbconn.php');
                      $sql = "SELECT * FROM clg_positionselection";
                      $result = $conn->query($sql);
                    ?>
                    <div class="form-floating">
                      <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="pos">
                        <option selected>Select position...</option>
                        <?php
                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                        ?>
                        <option value="<?php echo $row['position'];?>"><?php echo $row['position'];?></option>
                        <?php	
                          }
                          $conn->close();
                          }
                        ?> 
                      </select>
                      <label for="floatingYearLevel">Position <span class="text-danger">(Select)</span>:</label>
                    </div>
                    <!-- POSITION SELECTION END -->

                    <!-- PARTY LIST SELECTION START -->
                    <?php			
                      include ('../../../../dbconn.php');
                      $sql = "SELECT * FROM clg_plselection";
                      $result = $conn->query($sql);
                    ?>
                    <div class="form-floating">
                      <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="pl">
                        <option selected>Select party list...</option>
                        <?php
                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                        ?>
                        <option value="<?php echo $row['partyList'];?>"><?php echo $row['partyList'];?></option>
                        <?php	
                          }
                          $conn->close();
                          }
                        ?> 
                      </select>
                      <label for="floatingYearLevel">Party List <span class="text-danger">(Select)</span>:</label>
                    </div>
                    <!-- PARTY LIST SELECTION END -->

                    <!-- YEAR LEVEL SELECTION START -->
                    <?php			
                      include ('../../../../dbconn.php');
                      //DB QUERY FOR COURSE SELECTION OUTPUT
                      $sql = "SELECT * FROM clg_ylselection";
                      $result = $conn->query($sql);
                    ?>
                    <div class="form-floating">
                      <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="yl">
                        <option selected>Select year level...</option>
                        <?php // FETCH THE DATA FOR COURSE OUTPUT
                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                        ?>
                        <option value="<?php echo $row['yearLevel'];?>"><?php echo $row['yearLevel'];?></option>
                        <?php	
                          }
                          $conn->close();
                          }//CLOSE DB
                        ?> 
                      </select>
                      <label for="floatingYearLevel">Year Level <span class="text-danger">(Select)</span>:</label>
                    </div>
                    <!-- YEAR LEVEL SELECTION END -->

                    <!-- COURSE START -->
                    <?php			
                      include ('../../../../dbconn.php');
                      //DB QUERY FOR COURSE SELECTION OUTPUT
                      $sql = "SELECT * FROM clg_courseselection";
                      $result = $conn->query($sql);
                    ?>
                    <div class="form-floating">
                      <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="crse">
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
                      <label for="floatingCourse">Course: <span class="text-danger">(Select)</span>:</label>
                    </div>
                    <!-- COURSE END -->

                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder=">Write you content here" maxlength="5000" id="pf" name="pf" style="height: 200px" required></textarea>
                      <label for="floatingTextarea">Platform <span class="text-danger">(5,000)</span>:</label>
                    </div>


                    <input type="submit"  name="addCandidateBtn" class="btn btn-success px-4" value="Add New Candidate">
                    <a class="btn btn-danger px-4" href="candidatesControl.php">Cancel</a>

                  </form>

              </div>

            </div>
          </div>
          <!-- DASHBOARD END-->
      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
