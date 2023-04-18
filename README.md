# i-Vote

Hello, future developer of this system! I'm Ranillo Santos, a BSCS 42cc student from S.Y. 2022-2023 and the solo developer of this system. I would like to leave a message here to give you some ideas on how to improve this system further, which I didn't have enough time to do.

BETTER DATA SECURITY
-Please encrypt the database and use the PDO query style to secure its data further.

BETTER PORTAL DESIGN AND LOGIN DESIGN
-Please redesign our index page and the login page if necessary.

LOGIN INVALID ALERT
-Currently, when a user enters an invalid account, it redirects them to loginInvalid.php. Instead, we would like to delete that Invalid.php (adminLogin-Invalid.php, collegeLogin-Invalid.php, and shsLogin-Invalid.php) and replace it with an alert through JS to reduce the file size of the system.

<a href="collegeContent/collegeSideNav/VOTERSACCOUNT/votersControl.php" style="text-decoration: none;">
  <div class="container p-3 bg-dark border border-light home-content text-light rounded text-center textdashcon m-5" style="width: 375px;">
    <?php
      include ('../dbconn.php');
      $sql = "SELECT * FROM clg_candidates";
      $result = $conn->query($sql);
      $count=$result->num_rows;	
    ?>

      <div class="d-flex justify-content-between">
        <div class="col p-3 bg-primary border border-dark rounded-start align-self-center">
          <i class="fas fa-user-shield" style="font-size: 90px;"></i>
        </div>

        <div class="col p-3 bg-secondary border border-dark rounded-end">
          <div class="fs-2 fw-bolder">
            0     
          </div>
          <div class="col p-1 fs-5 align-self-end border border-dark rounded" style="background-color:red">
            Verified Acc.
          </div>
        </div>
      </div> 
    <?php 
      $conn->close();
    ?>
  </div>
</a>

USER/VOTER SIDE
-Please update the result to reflect any new vote count automatically. You can achieve this by making it update itself every 1 or 2 seconds using JavaScript and Ajax.

	USER/VOTER PROFILE & CHATS
	-Profile Picture
	-Edit Profile Page
	-Customer Service/Help Center
	-Chats, if possible

	EMAIL VERIFICATION AND OTP (FOR VERIFIED USERS)

	-We have codeVerificationLoginProcess.php, which connects to collegeOtpVerification.php. This function is currently not available, and I have been struggling to make the SMTP (here's the documents and the codes for the SMTP, https://github.com/PHPMailer/PHPMailer) work. Please pursue debugging the problem once you try. Kindly refer to the bug message on your own.
	-Implement OTP validation for verified email accounts before logging in. The OTP must be sent to their registered/verified email.

	ADMIN CONTROL
	-Please make it more responsive for mobile and smaller screen views.
	-I also forgot to fix the footer so that it always stays at the bottom.
	-Add form alerts when users reach their character/letter limit in each form (using JS) and include alerts for other necessary actions.
	-Please add verified information into the DASHBOARD data report. Use the provided information and edit it to connect to its data.

	I'm running out of time and need to prepare and pass it on now, haha! Don't hesitate to contact me if you need my help or if there's something you want to know more about how I built this website. It can be quite messy, so if you're feeling confused, I'm here to assist. There are still many plans to implement for this system that i didn't mention. I would be happy to discuss this system with you in my free time. Just reach out to me, and we can make it happen. 

	here's my contact:
	• Gmail - ranillos55@gmail.com
	• Discord - Oda#ranfreecss (236861893166235649)
	• Facebook - ranfreecs29/santosranillo21@yahoo.com
	• Globe - 09954615989

  06/30/2023
  S.Y 2022-2023



	
