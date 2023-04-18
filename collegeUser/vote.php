<?php include 'header.php'; ?>
<?php include 'collegeSession.php'; ?>
  <title>Vote</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
    }
    input[type="radio"] {
      transform: scale(1.5); /* increase size by 50% */
    }
    .dark-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none; /* Initially set as none */
    opacity: 0; /* Initially set as transparent */
    transition: opacity 0.3s ease;
  }

  .lock-icon {
    color: white;
    font-size: 100px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
  </style>
</head>
<body>

<div class="nav-head">
<nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
  <div class="container-fluid">
    <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">

      <li class="nav-item">
        <a class="nav-link" href="home.php" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fas fa-home" style="font-size:24px"></i><span class="d-none d-sm-inline"> Home</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="candidates.php" data-toggle="tooltip" data-placement="bottom" title="View Candidates"><i class="fas fa-id-card" style="font-size:24px"></i><span class="d-none d-sm-inline"> Candidates</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="result.php" data-toggle="tooltip" data-placement="bottom" title="Result"><i class="fa fa-bar-chart" style="font-size:24px"></i><span class="d-none d-sm-inline"> Result</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
          <i class="fas fa-user-cog" style="font-size:24px"></i></a>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end dropdown-menu-lg-end ">
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class='fas fa-user-lock'></i> Change Password</a></li><br>
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class='fas fa-power-off'></i> Log Out</a></li>
        </ul>
      </li>

    </ul>

  </div>
</nav>

<div class="full-main" id="lockpage">

  <div id="darkOverlay" class="dark-overlay">
    <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
  </div>

  <?php include '../time.php'; ?>

  <div class="container-fluid x">
    <?php include "../schoolLogo.php"; ?>
  </div>

  <?php include '../messageNotice.php'; ?>

    <hr>

    <?php include 'userSettingsModals/modalChangepass.php'; ?>
    <?php include 'userSettingsModals/modalEmailVerification.php'; ?>
    <?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>

  <div class="container">
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM clg_title WHERE titlePage='Vote'";
      $result = $conn->query($sql);
                  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_array()){
    ?>
    
    <h1><strong><b><?php echo $row['title']; ?></strong></b></h1>
    
    <?php	
      }		
      $conn->close();
      }
    ?>
  </div>
  
  <br>
  
  <?php
    include '../dbconn.php';
    $voterID = $_SESSION['voterID'];

    $sql = "SELECT voterName FROM clg_confirmedvote WHERE voterID = $voterID";
    $result = $conn->query($sql);

    $query = "SELECT voterName FROM clg_pendingvote WHERE voterID = $voterID";
    $queryresult = $conn->query($query);

    if ($result->num_rows > 0) {

        echo "<script>window.location.href = 'vote-warning.php';</script>";
        exit();

    } elseif ($queryresult->num_rows > 0){

        echo "<script>window.location.href = 'vote-pending-to-confirm.php';</script>";
        exit();

    }else{
    ?>
    <!--CANDIDATE SELECTION START-->
    <div class="container p-2">

      <div class="container"><h2><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 25px; margin-bottom: 7px;"> SELECT YOUR CANDIDATE</h2></div>

      <!--FILTER START-->
      <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

        <div class="nav-item">
          <a class="nav-link active" data-bs-toggle="pill" href="#positions">All Positions</a>
        </div>
        <div class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#plA">PARTY LIST A</a>
        </div>
        <div class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#plB">PARTY LIST B</a>
        </div>

      </div>

      <hr style="margin-top: -1px;">
        <!--FILTER END-->
    
      <div class="container overflow-auto rounded" style="height: 550px;" >
        <div class="container">
        
          <!--CONTENT START-->
          <div class="tab-content">
            <!--POSITION CONTENT START-->
            <div id="positions" class="tab-pane fade show active"><br>
              
                <!--POSITION PRESIDENT START-->
                <h5><i>ASPIRING PRESIDENT(S)</i></h5>
                <form action="vote-pending-process.php" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="vname" value="<?php echo $user->get_fullname($voterID);?>">
                <input type="hidden" name="vid" value="<?php echo $user->get_voterid($voterID);?>">
                  <div class="con">
                      
                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE position ='PRESIDENT'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                        <div class="box">
                          <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                          <div class="box-info">
                            <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="president" name="president" value="<?php echo $row['candidateID']?>" required></b></strong>
                            <br>
                            <b>Name: </b> <?php echo $row['name']?>
                          </div>
                        </div>
                        
                        <?php	
                          }		
                            $conn->close();
                          }
                        ?>
                  </div>
                <!--POSITION PRESIDENT END-->
                <hr>
                <!--POSITION VICE PRESIDENT START-->
                <h5><i>ASPIRING VICE PRESIDENT(S)</i></h5>
                <div class="con">
                
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='VICE PRESIDENT'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box">
                      <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="vpresident" name="vpresident" value="<?php echo $row['candidateID']?>" required></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION VICE PRESIDENT END-->
                <hr>
                <!--POSITION SECRETARY START-->
                <h5><i>ASPIRING SECRETARY(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='SECRETARY'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box">
                      <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="secretary" name="secretary" value="<?php echo $row['candidateID']?>" required></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION TREASURER END-->
                <hr>
                <!--POSITION SECRETARY START-->
                <h5><i>ASPIRING TREASURER(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='TREASURER'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box">
                      <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="treasurer" name="treasurer" value="<?php echo $row['candidateID']?>" required></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                    
                </div>
                <!--POSITION SECRETARY END-->
                <hr>
                <!--COLLEGE REPRESENTATIVE START-->
                <h5><i>COLLEGE REPRESENTATIVE(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='COLLEGE REP'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box">
                      <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="collegerep" name="collegerep" value="<?php echo $row['candidateID']?>" required></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--COLLEGE REPRESENTATIVE REPRESENTATIVE END-->
              
                <div class="container p-2 text-center">
                  <br>
                  <input class="btn btn-success px-4" id="voteBtnMain" name="voteBtnMain" type="submit" value="Submit">
                  <a class="btn btn-danger px-3" href="vote.php">Reset Vote</a>
                </div>
                </form>
                <br>

            </div>
              <!--POSITION CONTENT END-->
            

              <!--PARTY LIST A CONTENT START-->
              <div id="plA" class="container tab-pane fade"><br>

                <h5><i>PARTY LIST A</i></h5>
                <form action="vote-pending-process.php" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="vname" value="<?php echo $user->get_fullname($voterID);?>">
                <input type="hidden" name="vid" value="<?php echo $user->get_voterid($voterID);?>">
                  
                    <div class="con">
                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST A' AND position ='PRESIDENT'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="presidentA" name="presidentA" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST A' AND position ='VICE PRESIDENT'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="vpresidentA" name="vpresidentA" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST A' AND position ='SECRETARY'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="secretaryA" name="secretaryA" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST A' AND position ='TREASURER'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="treasurerA" name="treasurerA" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?>
                      
                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST A' AND position ='COLLEGE REP'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="clgrepA" name="clgrepA" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <div class="container p-2 text-center">
                        <br>
                        <input class="btn btn-success px-4" id="voteBtnA" name="voteBtnA" type="submit" value="Vote All">
                        <a class="btn btn-danger px-4" href="vote.php">Cancel</a>
                      </div>
                    </form>
                    <br>
                  </div>

              </div>
              <!--PARTY LIST A CONTENT START-->

              <!--PARTY LIST B CONTENT START-->
              <div id="plB" class="container tab-pane fade"><br>
              
                <h5><i>PARTY LIST B</i></h5>
                  <form action="vote-pending-process.php" method="post"  enctype="multipart/form-data">
                  <input type="hidden" name="vname" value="<?php echo $user->get_fullname($voterID);?>">
                  <input type="hidden" name="vid" value="<?php echo $user->get_voterid($voterID);?>">
                    <div class="con">
                    
                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST B' AND position ='PRESIDENT'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="presidentB" name="presidentB" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST B' AND position ='VICE PRESIDENT'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="vpresidentB" name="vpresidentB" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';  
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST B' AND position ='SECRETARY'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="secretaryB" name="secretaryB" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?>
                      
                      <?php include '../dbconn.php';  
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST B' AND position ='TREASURER'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="treasurerB" name="treasurerB" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <?php include '../dbconn.php';  
                        $sql = "SELECT * FROM clg_candidates WHERE partyList ='PARTY LIST B' AND position ='COLLEGE REP'";
                        $result = $conn->query($sql);
                                
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_array()) {
                      ?>
                      
                      <div class="box mb-4">
                        <img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                        <div class="box-info">
                          <strong><b class="fs-5"><?php echo $row['position']?> <input type="radio" id="clgrepB" name="clgrepB" value="<?php echo $row['candidateID']?>" checked></b></strong>
                          <br>
                          <b>Name: </b> <?php echo $row['name']?>
                        </div>
                      </div>
                      <?php	
                        }		
                          $conn->close();
                        }
                      ?> 

                      <div class="container p-2 text-center">
                        <br>
                        <input class="btn btn-success px-4" id="voteBtnB" name="voteBtnB" type="submit" value="Vote All">
                         <a class="btn btn-danger px-4" href="vote.php">Cancel</a>
                      </div>
                      <br>
                      
                    </div>
                  </form>
              </div>

            </div>
            <!--PARTY LIST B CONTENT START-->
            
          </div>
        </div>
      </div>
      
     <!--LEFT COLUMN END-->

    <?php
      }
      
    ?>
  
    </div>
  
</div>


<?php include 'footer.php' ?>