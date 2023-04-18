<div class="modal fade" id="changePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header text-dark">
        <h3 class="modal-title"><b><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 27px; height: 28px; margin-bottom: 7px;"> CHANGE PASSWORD</b></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal form body START-->
      <div class="modal-body text-dark">
        <div class="container">
          <p class="fs-5 text-danger"> Notice: You can only input 20 characters/letters.</p>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="oldpass" name="oldpass" required>
            <label for="floatingInput">Old Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="newpass" name="newpass" required>
            <label for="floatingInput">New Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="confirmpass" name="confirmpass" required>
            <label for="floatingInput">New Password Confirmation</label>
          </div>
        </div>
      </div>
      <!-- Modal form body END-->
      <!-- Modal footer START-->
      <div class="modal-footer">
        <button type="button" class="btn btn-success px-3" onclick="changePassword()">Save</button>
        <button type="button" class="btn btn-danger px-3" data-bs-dismiss="modal">Close</button>
      </div>
      <!-- Modal footer END-->
    </div>
  </div>
</div>

<script>
  function changePassword() {
    var oldPassword = document.getElementById('oldpass').value;
    var newPassword = document.getElementById('newpass').value;
    var confirmPassword = document.getElementById('confirmpass').value;

    // Validate input values
    if (oldPassword === "" || newPassword === "" || confirmPassword === "") {
        displayMessage("Please fill in all fields.", "danger");
        return;
    }

    if (newPassword.length > 20 || confirmPassword.length > 20) {
        displayMessage("Password should be less than or equal to 20 characters.", "danger");
        return;
    }

    if (newPassword !== confirmPassword) {
        displayMessage("New password and confirmation password do not match.", "danger");
        return;
    }

    // Send an AJAX request to the server-side PHP file
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'changepassword.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === "success") {
                    // Password changed successfully, display success message
                    displayMessage(response.message, "success");
                } else {
                    // Incorrect old password or mismatched new passwords, display error message
                    displayMessage(response.message, "danger");
                }
            } else {
                displayMessage("An error occurred. Please try again later.", "danger");
            }
        }
    };
    xhr.send('oldpass=' + encodeURIComponent(oldPassword) + '&newpass=' + encodeURIComponent(newPassword) + '&confirmpass=' + encodeURIComponent(confirmPassword));

    // Clear existing messages
    var modalBody = document.querySelector(".modal-body");
    modalBody.innerHTML = "";
}

function displayMessage(message, messageType) {
    var messageContainer = document.createElement("div");
    messageContainer.className = "alert alert-" + messageType;
    messageContainer.textContent = message;

    var modalBody = document.querySelector(".modal-body");
    modalBody.appendChild(messageContainer);
}
</script>