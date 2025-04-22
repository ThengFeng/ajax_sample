<?php
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $id = $_POST['id'];

    if ($action == "view_book") {
        // Simulate book data
        echo "<style>
        h3{
            color: blue;
            font-size: 24px;
          }
             </style>";
        echo "<h3>Book Details</h3>";
        echo "<p>Book ID: $id</p>";
        echo "<p>Title: The Great Gatsby</p>";
        echo "<p>Author: F. Scott Fitzgerald</p>";
    } else if ($action == "view_member") {
        // Simulate member data
        echo "<style>
        h3{
            color: red;
            font-size: 24px;
          }
             </style>";
        echo "<h3>Member Info</h3>";
        echo "<p>Member ID: $id</p>";
        echo "<p>Name: John Doe</p>";
        echo "<p>Status: Active</p>";
    } else {
        echo "Invalid action.";
    }
} else {
    echo "No action specified.";
}
