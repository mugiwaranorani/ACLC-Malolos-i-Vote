<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css" />
    <title>SHS Login</title>
    <link rel="icon" type="image/x-icon" href="collegeUser/ACLCLOGO/logo3.jpeg">
    <style>
      .portal-body{
      background-image: url("ACLCLOGO/AclcMalolos2.jpg");
      background-color: #cccccc;
      background-repeat: no-repeat;
      background-size: 100%;
      object-fit: cover;
      }
      @media (max-width: 940px) {
      .portal-body {
          background-size: 360%;
          }
      }
      .login-container{
        background-color: white;
       
        border: 2px solid black;
      }
      .form-control{
        border: 1px solid black;
      }
      .sclogo{
      width: 70px;
      position:relative;
    
      }
      .sclogo2{
        width: 160px;
        position:relative;
      }
      .login-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 450px;
      }
      @media (max-width: 768px) {
        .login-container {
          width: 350px;
        }
      }
    </style>
  </head>
  <body class="portal-body">

    <div class="container text-center mt-2">
      <img src="ACLCLOGO/sclogo2.png" class="sclogo" alt="School Logo"><img src="ACLCLOGO/aclc.png" class="sclogo2" alt="School Logo">
    </div>

        <div class="container-fluid login-container p-3 rounded text-center">
          <form action="shsLoginProcess.php" method="POST">
            <h1 class="mb-3"><b>SHS LOGIN</b></h1>

            <div class="d-flex justify-content-center">
              <i class="fas fa-user mt-2 fs-2 mx-2"></i>
              <div class="form-floating mb-3" style="margin-right: 35px;">
                <input type="text" class="form-control" name="usn" placeholder="USN" value="" required>
                <label for="floatingInput">USN</label>
              </div>
            </div>
            
            <div class="d-flex justify-content-center">
              <i class="fas fa-lock mt-2 fs-2 mx-2"></i>
              <div class="form-floating mb-3" style="margin-right: 35px;">
                <input type="password" class="form-control" name="vpass" placeholder="Password" value="" required>
                <label for="floatingInput">PASSWORD</label>
              </div>
            </div>

            <div class="d-flex-column mt-3 text-center">
            <button type="submit" name="submit" class="log-btn btn btn-success mx-1 fs-4 px-3">Sign In</button>
            <a href="index.php" class="back-btn btn btn-danger mx-1 fs-4 px-4">Back</a>
          </form>
        </div>
        
  </body>
</html>