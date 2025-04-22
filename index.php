<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Popup with AJAX</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    #popup, #overlay {
      display: none;
      position: fixed;
    }
    #overlay {
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.5); z-index: 998;
    }
    #popup {
      top: 20%; left: 30%; width: 40%;
      background: #fff; padding: 20px;
      border: 1px solid #ccc; z-index: 999;
    }
  </style>
</head>
<body>

  <button class="popup-btn" data-action="view_book" data-id="BK0001">View Book</button>
  <button class="popup-btn" data-action="view_member" data-id="M0005">View Member</button>

  <div id="overlay"></div>
  <div id="popup">
    <button id="closePopup">Close</button>
    <div id="popupContent">Loading...</div>
  </div>

  <script src="script.js"></script>
</body>
</html>
