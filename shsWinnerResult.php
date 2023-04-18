<?php
   // Check if the user's preference is stored in the session variable
   $showResults = $_SESSION['showResults'] ?? false;
?>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function() {
      // Check if the user's preference is set in the cookie
      var showResults = getCookie('showResults') === 'true';
      if (showResults) {
      showResultsAndStorePreference();
      } else {
      hideResultsAndRemovePreference();
      }

      // Show the results and set the cookie when "Show Final Vote Result" button is clicked
      $("#showResultsBtn").click(function() {
      showResultsAndStorePreference();
      });

      // Hide the results and remove the cookie when "Hide Final Vote Result" button is clicked
      $("#hideResultsBtn").click(function() {
      hideResultsAndRemovePreference();
      });

      // Function to show the results and store the preference in a cookie
      function showResultsAndStorePreference() {
      $(".cons").show();
      $("#showResultsBtn").hide();
      $("#hideResultsBtn").show();

      // Set the cookie to store the preference
      setCookie('showResults', 'true', 30); // Expires in 30 days
      }

      // Function to hide the results and remove the preference cookie
      function hideResultsAndRemovePreference() {
      $(".cons").hide();
      $("#hideResultsBtn").hide();
      $("#showResultsBtn").show();

      // Remove the preference cookie
      deleteCookie('showResults');
      }

      // Function to get the value of a cookie
      function getCookie(name) {
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
         var cookie = cookies[i].trim();
         if (cookie.indexOf(name + '=') === 0) {
            return cookie.substring(name.length + 1);
         }
      }
      return '';
      }

      // Function to set a cookie with a given name, value, and expiration days
      function setCookie(name, value, days) {
      var expires = '';
      if (days) {
         var date = new Date();
         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
         expires = '; expires=' + date.toUTCString();
      }
      document.cookie = name + '=' + value + expires + '; path=/';
      }

      // Function to delete a cookie by setting its expiration to the past
      function deleteCookie(name) {
      document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
      }
   });
</script>