<?php
if ($_GET['randomId'] != "b7tKxXhBRjos654UfZBRuvlvAwYoVrymlLV8iLjuG987WtMENFzFNVV3x3RJwGos") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
