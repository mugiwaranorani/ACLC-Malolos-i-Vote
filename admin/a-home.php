<?php include 'a-header.php'; ?> 
<?php include 'adminSession.php'; ?>

<link href="../CSS/style.css" rel="stylesheet">
<title>Admin Home</title>
  <link rel="icon" type="image/x-icon" href="../collegeUser/ACLCLOGO/logo3.jpeg">
  <style>
    .imageHome{
        width: 100%;
        
      }

    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
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
            <a class="navbar-brand" href="a-home.php">
              <img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"> 
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="college.php" data-toggle="tooltip" data-placement="bottom" title="College Panel">College</a>
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
  <div class="full-main">
    <div class="container home-content p-3 fs-5">
      <h2 class="user-greeting"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> Home - System Guide for Admin</b></strong></h2>
        <hr>	

          <?php			
            include ('../dbconn.php');
            $sql = "SELECT * FROM admin_home";
            $result = $conn->query($sql);
                                      
            if ($result->num_rows > 0) {
              while($row = $result->fetch_array()){
                $imageVisibility = ($row['homeImages'] > 0) ? "<img src= 'adminUploads/" . $row['homeImages'] . "' class='imageHome line-shadow mb-3'>" : "";
          ?>

            <h4><?php echo nl2br($row['contentHeader'])?></h4>
            <p><?php echo nl2br($row['content'])?></p>
            <?php echo $imageVisibility ?>
            <br>

          <?php	
            }		
            $conn->close();
            }
          ?>
      
    </div>  
    </div>
  </div>
  <!-- CONTENT END -->





<?php include 'a-footer.php'?>
