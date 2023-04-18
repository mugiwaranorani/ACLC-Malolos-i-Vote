<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

<title>Admin College</title>
  <link rel="icon" type="image/x-icon" href="../../../../collegeUser/ACLCLOGO/logo3.jpeg">
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
      <style>
        .home-content{
          box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
          border-radius: 15px;
        }
      </style>

      <div class="col-sm-9">

          <div class="tab-pane fade show active p-3">
            <h1><strong><b><i><i class='fa fa-home' style='font-size:50px'></i> HOME</b></i></strong></b></h1>
            <hr>

            <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

              <div class="nav-item">
                <a class="nav-link" href="homeControl.php">Information</a>
              </div>
              <div class="nav-item">
                <a class="nav-link" href="announcements.php">Announcement</a>
              </div>
              <div class="nav-item">
                <a class="nav-link active" href="systemGuide.php">System Guide</a>
              </div>

            </div>

            <div class="container-fluid overflow-auto p-1" style="height: 500px;">
              
              <div class="container home-content p-3">        
                
                <h3><i class='fas fa-edit' style='font-size:30px'></i> EDIT SYSTEM GUIDE TITLE AND CONTENT</h3>
                <hr>

                <?php
                  if (isset($_POST['editSGBtn'])) {
                      include ('../../../../dbconn.php');

                      $image = $_FILES['imageToUpload']['name'];
                      $image_tmp = $_FILES['imageToUpload']['tmp_name'];

                      if (!empty($image)) {
                          $target_directory = '../../../../uploadsHome/';
                          $target_path = $target_directory . $image;

                          if (move_uploaded_file($image_tmp, $target_path)) {
                              $contentHeader = $_POST['sgcontentheader'];
                              $content = $_POST['sgcontent'];
                              $contentHeader = str_replace('\'', '’', $contentHeader);
                              $content = str_replace('\'', '’', $content);
                              $id = $_REQUEST['id'];

                              $sql = "UPDATE `clg_home` SET `contentHeader`='$contentHeader', `content`='$content', `homeImages`='$image' WHERE homeID = $id";

                              if ($conn->query($sql) === TRUE) {
                                  ?>
                                  <i><h2 class="text-success">System Guide content has been updated successfully!</i></h2>
                                  <?php
                              } else {
                                  echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                          } else {
                              echo "<i><h2 class='text-danger'>Error moving the uploaded file.</i></h2>";
                          }
                      } else {
                          $contentHeader = $_POST['sgcontentheader'];
                          $content = $_POST['sgcontent'];
                          $contentHeader = str_replace('\'', '’', $contentHeader);
                          $content = str_replace('\'', '’', $content);
                          $id = $_REQUEST['id'];

                          $sql = "UPDATE `clg_home` SET `contentHeader`='$contentHeader', `content`='$content' WHERE homeID = $id";

                          if ($conn->query($sql) === TRUE) {
                              ?>
                              <i><h2 class="text-success">System Guide content has been updated successfully!</i></h2>
                              <?php
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                      }

                      $conn->close();
                  }
                  ?>

                          <a class="btn btn-primary px-4 mt-2" href="systemGuide.php">BACK</a>

              </div> 

                

            </div>
          </div>

      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
