$.ajax({
  url: "backend-handler.php",      // The backend file or API to send the request to
  method: "POST",                  // The HTTP method: GET or POST
  data: { action: action, id: id },// Data sent to the server (from HTML button attributes)
  success: function(response) {    // Runs when the server returns data successfully
    $("#popupContent").html(response); // Inserts the result into the popup
    $("#overlay, #popup").fadeIn();    // Shows the popup and overlay
  },
  error: function() {              // Runs if there's an error with the request
    $("#popupContent").html("Error loading content.");
    $("#overlay, #popup").fadeIn();
  }
});
