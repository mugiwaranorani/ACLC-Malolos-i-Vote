<style>
  .time-container {
    position: fixed;
    top: 50%; /* 12 */
    left: 93.5%; /* 22 */
    /*transform: translate(-50%, -50%);*/
    width: 100px;
    cursor: move;
    text-align: center;
    justify-content: center;
    border: 1px solid black;
    z-index: 2;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }

  .time {
    text-align: center;
    font-size: 18px;
    user-select: none;
  }

  @media screen and (max-width: 768px) {
    .time-container {
      top: 45%;
      left: 75%;
      width: 89px;
      font-size: 16px;
    }
  }

  .bg-vote {
    background-color: green !important; /*#007bff primary color*/ 
    border: 1px solid black;
  }

  .bg-red {
    background-color: red !important;
    border: 1px solid black;
  }

  .bg-orange {
    background-color: orange !important;
    border: 1px solid black;
  }
</style>

<div id="dragdiv" class="col sm-1 time-container bg-primary text-white rounded p-1 m-0">
  <div id="dragdivheader">
    <div id="demo" class="time">
      <i class="fas fa-stopwatch" style="font-size: 24px"></i><br>Move me!
    </div>
  </div>
</div>

<?php
  include 'dbconn.php';
   $sql = "SELECT `dateTime` FROM `datetimedata` WHERE `dtID` = 1";
   $result = $conn->query($sql);

   if ($result && $result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $dateTime = $row['dateTime'];
   } else {
       // Default value if no record found in the database
       $dateTime = "December 25, 2023 12:00:00 AM";

       $conn->close();
   }
?>

<script>
  // Set the time for each timer session
  var waitingTime = new Date("<?php echo $dateTime; ?>").getTime();
  var votingTime = waitingTime + (24 * 60 * 60 * 1000); // 24 hours in milliseconds
  var last15Minutes = votingTime - (15 * 60 * 1000); // Last 15 minutes in milliseconds

  // Update the count down every 1 second
  var x = setInterval(function() {
    // Get the current time
    var now = new Date().getTime();

    // Set the default session as waiting time
    var session = "Waiting";
    var targetTime = waitingTime;
    var bgColor = "bg-primary"; // Default background color
    var message = ""; // Default message

    // Determine the current session and target time
    if (now >= waitingTime && now < votingTime) {
      session = "Voting";
      targetTime = votingTime;
      bgColor = "bg-vote"; // Background color during voting phase

      // Check if it's the last 15 minutes of the voting phase
      if (now >= last15Minutes) {
        bgColor = "bg-orange"; // Background color during the last 15 minutes
        message = "<i class='fas fa-exclamation-circle'></i> <b>Important notice:</b> Voting is approaching its closing time. Kindly submit your vote promptly before the expiration time. <i class='fas fa-exclamation-circle'></i>";
      }

      // Make the element clickable during the voting session
      document.getElementById("dragdiv").style.pointerEvents = "auto";
    } else {
      // Make the element unclickable during the waiting and expiration sessions
      document.getElementById("dragdiv").style.pointerEvents = "none";
    }

    // Calculate the remaining time based on the target time
    var distance = targetTime - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s";

    // Set the background color based on the session
    document.getElementById("dragdiv").classList.remove("bg-primary", "bg-vote", "bg-orange", "bg-red");
    document.getElementById("dragdiv").classList.add(bgColor);

    // Show/hide the message based on the session
    document.getElementById("notice").innerHTML = message;
    document.getElementById("notice").style.display = message ? "block" : "none";

    // If the current session is over, update the session and target time
    if (now >= votingTime) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "Voting Ended";
      document.getElementById("dragdiv").classList.remove("bg-primary", "bg-vote", "bg-orange");
      document.getElementById("dragdiv").classList.add("bg-red");

      // Make the element unclickable during the expiration session
      document.getElementById("dragdiv").style.pointerEvents = "none";
    }

    // Show/hide the dark overlay based on the session
    var darkOverlay = document.getElementById("darkOverlay");
    if (session === "Waiting" || session === "Voting Ended") {
      darkOverlay.style.opacity = 1; // Show the overlay
      darkOverlay.style.pointerEvents = "auto"; // Make the overlay clickable
    } else {
      darkOverlay.style.opacity = 0; // Hide the overlay
      darkOverlay.style.pointerEvents = "none"; // Make the overlay unclickable
    }
  }, 1000);
</script>

<!--DRAG DRAG DRAG DRAG DRAG DRAG DRAG DRAG -->
<script>
//Make the DIV element draggagle:
function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").addEventListener('mousedown', dragMouseDown);
    if ('ontouchstart' in document.documentElement) {
      /* if touch events are supported, add touch event listeners */
      document.getElementById(elmnt.id + "header").addEventListener('touchstart', dragMouseDown, { passive: false });
    }
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.addEventListener('mousedown', dragMouseDown);
    if ('ontouchstart' in document.documentElement) {
      /* if touch events are supported, add touch event listeners */
      elmnt.addEventListener('touchstart', dragMouseDown, { passive: false });
    }
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX || e.touches[0].clientX;
    pos4 = e.clientY || e.touches[0].clientY;
    document.onmouseup = closeDragElement;
    document.ontouchend = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
    document.ontouchmove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - (e.clientX || e.touches[0].clientX);
    pos2 = pos4 - (e.clientY || e.touches[0].clientY);
    pos3 = e.clientX || e.touches[0].clientX;
    pos4 = e.clientY || e.touches[0].clientY;
    // set the element's new position:
    elmnt.style.top = elmnt.offsetTop - pos2 + "px";
    elmnt.style.left = elmnt.offsetLeft - pos1 + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
    document.ontouchend = null;
    document.ontouchmove = null;
  }
}

// Call the dragElement function on the dragdiv element
dragElement(document.getElementById("dragdiv"));
</script>
