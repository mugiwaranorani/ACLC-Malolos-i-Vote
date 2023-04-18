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
              <a class="nav-link active" href="candidate-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Canditate's Position & Party List</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="student-selectionControl.php"><i class='fas fa-file' style='font-size:18px'></i> Student's Year Level & Course</a>
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
          <!-- CANDIDATES SELECTION ADD FORM START-->
          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class='fas fa-file' style='font-size:40px'></i> FILE - POSITION AND PARTY LIST</i></strong></b></h1>
            <hr>
            <div class="container-fluid overflow-auto" style="height: 560px;">
            <br>
              <div class="container line-shadow p-3">

                <h3><i class='fas fa-file' style='font-size:30px'></i> EDIT PARTY LIST (SELECTION)</h3>
                <hr>
                  
                  <form action="candidate-edit-partyList-result.php" method="post">

                    <label class="text-danger"><h5>Note: The numbers beside the labels, indicates the maximum letters/characters that you can input in each form.</h5></label>

                    <?php			
                      include ('../../../../dbconn.php');
                      $id = $_REQUEST['id'];
                      $sql = "SELECT * FROM clg_plselection WHERE partyListID = $id";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="partyListSelect" maxlength="14" name="partyListSelect" placeholder="title here" value="<?php echo $row['partyList']?>" required>
                      <label for="floatingInput">Position <span class="text-danger">(14)</span>:</label>
                    </div>

                    <?php	
                      }		
                      $conn->close();
                      }
                    ?> 

                    <input class='btn btn-primary' type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
                    <input type="submit"  name="editPLInfoBtn" class="btn btn-success px-4" value="Save">
                    <a class="btn btn-danger px-3" href="candidate-selectionControl.php">Cancel</a>

                  </form>

              </div>
              
            </div>
          </div>
          <!-- CANDIDATES SELECTION ADD FORM END-->
      </div>
                        
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
