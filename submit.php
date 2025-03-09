<?php
if (isset($_POST["sub"])) {
    
    $name = $_POST['myname'];
$gender=$_POST['gender'];
$text=$_POST['txtarea'];
    
    echo "<h1>Form Submitted</h1>";
    echo "Your name: " . $name; 
    echo "<br>";
    echo "Your gender: " . $gender. "<br>".
    "your text: " .$text;
} else {
    echo "No data submitted.";
}
?>
