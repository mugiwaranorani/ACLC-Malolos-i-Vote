<?php include '../../../a-header.php'; ?>
<?php include '../adminSession.php'; ?>

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
                    include ('../../../../dbconn.php');
                    $id = $_REQUEST['id'];
                    $sql = "SELECT * FROM shs_home WHERE homeID = $id";
                    $result = $conn->query($sql);
                                      
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_array()){
                  ?>

                  <form action="systemGuide-Edit-Result.php" method="post" enctype="multipart/form-data">

                    <p class="fs-5 container">Device type: <?php echo $row['device']; ?></p>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="sgcontentheader" name="sgcontentheader" placeholder="title here" value="<?php echo $row['contentHeader']?>" required>
                      <label for="floatingInput">Header Title:</label>
                    </div>

                    <div class="form-floating mb-3">
                      <textarea class="form-control" rows="5" cols="20%" placeholder=">Write you content here" id="sgcontent" name="sgcontent" style="height: 250px" required><?php echo $row['content']?></textarea>
                      <label for="floatingTextarea">Content:</label>
                    </div>

                    <div class="container text-center">
                      <label class="fs-5 mb-2">Select image to upload: </label>
                      <input type="file" name="imageToUpload" id="imageToUpload" onchange="previewImage()" class="mb-3">
                      <img id="preview" src="../../../../uploadsHome/default-homeImage.jpg" alt="" style="width: 100%;" class="mb-3 line-shadow">

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
                    </div>
                    
                    <input class='btn btn-primary' type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
                    <input type="submit"  name="editSGBtn" class="btn btn-success px-4" value="Save">
                    <a class="btn btn-danger px-3" href="systemGuide.php">Cancel</a>

                  </form>

                  <?php	
                    }		
                      $conn->close();
                    }
                  ?>

              </div> 

                

            </div>
          </div>

      </div>
          
  <!-- CONTENT END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<?php include '../s-footer.php'?>
