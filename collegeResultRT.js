function updateVoteCount() {
    // Get all the elements with the "vote-count" class
    var voteCountElements = document.getElementsByClassName('vote-count');
  
    // Loop through each element
    Array.prototype.forEach.call(voteCountElements, function(element) {
      // Get the candidate ID from the "data-candidate-id" attribute
      var candidateId = element.getAttribute('data-candidate-id');
  
      // Create a new XHR object
      var xhr = new XMLHttpRequest();
  
      // Set up the XHR request
      xhr.open('POST', 'collegeUpdateVoteCount.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
      // Define the data to be sent
      var data = 'candidateID=' + encodeURIComponent(candidateId);
  
      // Define the callback function when the request is complete
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Update the vote count with the response from the PHP script
          element.innerHTML = 'VOTES [' + xhr.responseText + ']';
        }
      };
  
      // Send the XHR request with the data
      xhr.send(data);
    });
  }
  
  // Call the updateVoteCount function every second
  setInterval(updateVoteCount, 1000);