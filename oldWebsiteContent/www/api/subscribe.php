<?php
// print_r($_POST);
require("../wp-load.php");
$to = "lucasmullens@gmail.com, wiscmail@paradime.net, publicity@delta.khk.org";
$subject = "KHK Rush Mailing List Submission";
extract($_POST);
$message = "
Name: $name
Email: $email
Major: $major
Standing: $standing
";
if ($name && $email)
wp_mail( $to, $subject, $message);
?>