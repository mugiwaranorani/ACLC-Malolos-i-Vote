<?php include 'header.php'?>
<?php include 'shsSession.php'?>
  <title>Result</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .content-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
      border-radius: 15px;
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
      border-radius: 15px;
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
        <a class="nav-link" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="result.php" data-toggle="tooltip" data-placement="bottom" title="Result"><i class="fa fa-bar-chart" style="font-size:24px"></i><span class="d-none d-sm-inline"> Result</span></a>
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

<div class="full-main">

<div class="container-fluid x" id="lockpage">
  <?php include "../schoolLogo.php"?>
</div>

<div id="darkOverlay" class="dark-overlay" style="display:none;">
  <i class="fa-solid fa-lock fa-bounce lock-icon"></i>
</div>

<hr>

<?php include '../time.php'; ?>

<?php include '../messageNotice.php'; ?>

<?php include 'userSettingsModals/modalChangepass.php'; ?>
<?php include 'userSettingsModals/modalEmailVerification.php'; ?>
<?php include 'userSettingsModals/modalLogoutConfirmation.php'; ?>

<div class="container">
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM shs_title WHERE titlePage='Result'";
      $result = $conn->query($sql);
                  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_array()){
    ?>


      <h1><strong><b><?php echo $row['title']?></strong></b></h1>

    <?php	
      }		
      $conn->close();
      }
    ?>
</div>

      <div class="container">
        <div class="nav nav-pills d-flex flex-column flex-xxl-row overflow-auto" role="tablist" style="height:51px;">

          <div class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#slideshow">Slide Show Result</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#table">Table Result</a>
          </div>

        </div>
      </div>

        <div class="container text-center fs-4">
          <?php
            include ('../dbconn.php');

            $voterCountQuery = "SELECT * FROM shs_voter";
            $voterResult = $conn->query($voterCountQuery);
            $voterCount=$voterResult->num_rows;	

            $votedCountQuery = "SELECT voteStatus FROM shs_voter WHERE voteStatus = 'Voted'";
            $votedCountResult = $conn->query($votedCountQuery);
            $votedCount=$votedCountResult->num_rows;	
          ?>
          <p><i class="fa-solid fa-user-check" style="font-size:25px"></i> Voted Status: <?php echo $votedCount; ?>/<?php echo $voterCount; ?></p>
        </div>
      
  
      <div class="tab-content mb-3">
        <div id="slideshow" class="tab-pane fade show active">
          <div class="container">
            <div class="row d-flex justify-content-around">

              <!--SLIDESHOW CONTENT START-->
              <!--PARTY LIST A IMAGE AND INFO VOTES SLIDES START-->
              <div class="col-sm-4">
                <h2 class="d-flex justify-content-center"><i>PARTY LIST A</i></h2>
                <div id="partylista" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded imgCon">
                    <?php
                      include ('../dbconn.php');
                      
                      // Define the positions to display the star icon for
                      $positions = array('PRESIDENT', 'VICE PRESIDENT', 'SECRETARY', 'TREASURER', 'AUDITOR', 'G-11 REP', 'G-12 REP');
                      
                      // Loop through the positions and get the maximum vote count for each position
                      foreach ($positions as $position) {
                        $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = '$position'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $max_vote_counts[$position] = $row['max_vote_count'];
                      }
                      
                      $sql = "SELECT * FROM shs_candidates WHERE partyList = 'PARTY LIST A'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                          $vote_count = $row['voteCount'];
                          $position = $row['position'];
                          $max_vote_count = $max_vote_counts[$position];
                          $star_icon = ($vote_count == $max_vote_count && in_array($position, $positions) && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:24px; color: yellow;'></i>" : "";
                    ?>
                    <div class="carousel-item active">
                      <img src="../uploads/<?php echo $row['picture']?>" class="imgResult d-block w-100" alt="candidate photo">
                      <div class="carousel-caption d-md-block bg-primary text-light border border-light rounded content-shadow p-1">
                        <h3>
                          <strong>
                            <b>
                            <?php echo $row['position']?>
                              <br>VOTES [<?php echo $row['voteCount']?>]<?php echo $star_icon; ?>
                            </b>
                          </strong>
                        </h3>
                        <h4><strong><b>Name: </strong></b><?php echo $row['name']?></h4>
                      </div>
                    </div>
                    <?php	
                      }		
                      $conn->close();
                      }
                    ?>
                  </div>

                  <button class="carousel-control-prev d-none-sm" type="button" data-bs-target="#partylista" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next d-none-sm" type="button" data-bs-target="#partylista" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
                
              <!--PARTY LIST A IMAGE AND INFO VOTES SLIDES END-->
              <!--PARTY LIST B IMAGE AND INFO VOTES SLIDES START-->
              <div class="col-sm-4">
                <h2 class="d-flex justify-content-center"><i>PARTY LIST B</i></h2>
                <div id="partylistb" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded imgCon">
                    <?php
                      include ('../dbconn.php');
                      
                      // Define the positions to display the star icon for
                      $positions = array('PRESIDENT', 'VICE PRESIDENT', 'SECRETARY', 'TREASURER', 'AUDITOR', 'G-11 REP', 'G-12 REP');
                      
                      // Loop through the positions and get the maximum vote count for each position
                      foreach ($positions as $position) {
                        $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = '$position'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $max_vote_counts[$position] = $row['max_vote_count'];
                      }
                      
                      $sql = "SELECT * FROM shs_candidates WHERE partyList = 'PARTY LIST B'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                          $vote_count = $row['voteCount'];
                          $position = $row['position'];
                          $max_vote_count = $max_vote_counts[$position];
                          $star_icon = ($vote_count == $max_vote_count && in_array($position, $positions) && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:24px; color: yellow;'></i>" : "";
                    ?>
                    <div class="carousel-item active">
                      <img src="../uploads/<?php echo $row['picture']?>" class="imgResult d-block w-100" alt="candidate photo">
                      <div class="carousel-caption d-md-block bg-primary text-light border border-light rounded content-shadow p-1">
                        <h3>
                          <strong>
                            <b>
                            <?php echo $row['position']?>
                              <br>VOTES [<?php echo $row['voteCount']?>]<?php echo $star_icon; ?>
                            </b>
                          </strong>
                        </h3>
                        <h4><strong><b>Name: </strong></b><?php echo $row['name']?></h4>
                      </div>
                    </div>
                    <?php	
                      }		
                      $conn->close();
                      }
                    ?>
                  </div>

                  <button class="carousel-control-prev d-none-sm" type="button" data-bs-target="#partylistb" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next d-none-sm" type="button" data-bs-target="#partylistb" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            
            </div>
          </div>  
        </div>
        <!--PARTY LIST B IMAGE AND INFO VOTES SLIDES END-->
        <!--SLIDESHOW CONTENT END-->
        
        <!--TABLE CONTENT START-->
        <div id="table" class="tab-pane table-responsive fade">
          <div class="container">

            <div class="col-sm-12 col-lg-12 d-flex justify-content-center">
              <form action="#searchResult" method="post" class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="Search Here" aria-label="Search" style="border: 1px solid;" required>
                <button class="btn btn-outline-success" name="searchbtn" type="submit">Search</button>
              </form>
            </div>
            
            <br>

            <?php
              if (isset($_POST['searchbtn'])) {
                $search = $_POST['search'];
            ?>
            
              <table class="table table-responsive table-hover table-dark rounded" style="overflow: hidden;">
                <thead>
                  <tr>
                    <th scope="col"><img src="../ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Party List</th>
                    <th scope="col">Vote(s)</th>
                  </tr>
                </thead>
                <tbody>
              
                  <?php
                    include ('../dbconn.php');

                    $positions = array('PRESIDENT', 'VICE PRESIDENT', 'SECRETARY', 'TREASURER', 'shs REP');
                      
                      // Loop through the positions and get the maximum vote count for each position
                      foreach ($positions as $position) {
                        $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = '$position'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $max_vote_counts[$position] = $row['max_vote_count'];
                      }
                    
                    $searchQuery = "SELECT * FROM shs_candidates WHERE name LIKE '%{$search}%' OR position LIKE '%{$search}%' OR partyList LIKE '%{$search}%'  OR voteCount LIKE '%{$search}%'";
                    $searchResult = mysqli_query($conn, $searchQuery);
                    $searchCount=$searchResult->num_rows;
                    $i = 1;
                    
                    if (mysqli_num_rows($searchResult) > 0) {
                  ?>

                    <div class="container line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $searchCount; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="result.php">Clear Search</a>
                    </div>

                  <?php
                    while ($row = mysqli_fetch_assoc($searchResult)) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && in_array($position, $positions) && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                  ?>

                    <tr>
                      <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['position']?></td>
                      <td><?php echo $row['partyList']?></td>
                      <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                    </tr>

                  <?php
                    $i++;
                    }
                    $conn->close();
                    }else{
                  ?>

                    <div class="container line-shadow p-3 mb-4">
                      <h3> Search Result: "<?php echo $search; ?>" <?php echo $searchCount; ?> item(s) Found!</h3>									
                      <a class="btn btn-outline-danger" href="result.php">Clear Search</a>
                    </div>

                  <?php
                    }
                  ?>

                </tbody>
              </table>

            <?php
              }else{
            ?>

            <h3><i>PRESIDENT(S)</i></h3>

            <table class="table table-responsive table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');

                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'PRESIDENT'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['PRESIDENT'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'PRESIDENT'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'PRESIDENT' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>VICE PRESIDENT(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'VICE PRESIDENT'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['VICE PRESIDENT'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'VICE PRESIDENT'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'VICE PRESIDENT' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>SECRETARY(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'SECRETARY'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['SECRETARY'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'SECRETARY'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'SECRETARY' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>TREASURER(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'TREASURER'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['TREASURER'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'TREASURER'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'TREASURER' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>AUDITOR(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'AUDITOR'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['AUDITOR'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'AUDITOR'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'AUDITOR' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>GRADE 11 REPRESENTATIVE(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['G-11 REP'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'G-11 REP' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <hr>

            <h3><i>GRADE 12 REPRESENTATIVE(S)</i></h3>

            <table class="table table-hover table-dark rounded" style="overflow: hidden;">
              <thead>
                <tr>
                  <th scope="col"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 16px;"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Party List</th>
                  <th scope="col">Vote(s)</th>
                </tr>
              </thead>
              <tbody>
                <?php			
                  include ('../dbconn.php');
                  
                  $query = "SELECT MAX(voteCount) AS max_vote_count FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $max_vote_counts['G-11 REP'] = $row['max_vote_count'];
                  
                  $sql = "SELECT * FROM shs_candidates WHERE position = 'G-11 REP'";
                  $result = $conn->query($sql);
                          
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                      $vote_count = $row['voteCount'];
                      $position = $row['position'];
                      $max_vote_count = $max_vote_counts[$position];
                      $star_icon = ($vote_count == $max_vote_count && $row['position'] == 'G-11 REP' && $vote_count > 0) ? "<i class='fas fa-star' style='font-size:14px; color: yellow;'></i>" : "";
                ?>
                <tr>
                  <th scope="row"><img src="../uploads/<?php echo $row['picture']?>" alt="sc candidate" class="tableImg"></th>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['partyList']?></td>
                  <td><?php echo $row['voteCount']?> <?php echo $star_icon; ?></td>
                </tr>
                <?php	
                  }		
                  $conn->close();
                  }
                ?> 
              </tbody>
            </table>

            <?php
              }
            ?>

          </div>
        </div>
        <!--TABLE CONTENT END-->

      </div>
        
        
  
  </div>      
</div>
    

<?php include 'footer.php' ?>