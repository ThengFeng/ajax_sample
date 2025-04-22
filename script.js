$(document).ready(function() {
    $(".popup-btn").click(function() {
      const action = $(this).data("action");
      const id = $(this).data("id");
  
      $.ajax({
        url: "backend-handler.php",
        method: "POST",
        data: { action: action, id: id },
        success: function(response) {
          $("#popupContent").html(response);
          $("#overlay, #popup").fadeIn();
        },
        error: function() {
          $("#popupContent").html("Error loading content.");
          $("#overlay, #popup").fadeIn();
        }
      });
    });
  
    $("#closePopup, #overlay").click(function() {
      $("#overlay, #popup").fadeOut();
    });
  });
  