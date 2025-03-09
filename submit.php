<?php
if (isset($_POST["sub"])) {
    // Get the 'myname' value from the POST data
    $name = $_POST['myname'];
$gender=$_POST['gender'];
$text=$_POST['txtarea'];
    // Display the name
    echo "<h1>Form Submitted</h1>";
    echo "Your name: " . $name; 
    echo "<br>";
    echo "Your gender: " . $gender. "<br>".
    "your text: " .$text;
} else {
    echo "No data submitted.";
}
?>
