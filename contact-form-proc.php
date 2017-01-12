<?php
 
if(empty($_POST['submit']))
{
    echo "Form is not submitted!";
    exit;
}
if(empty($_POST["name"]) ||
    empty($_POST["message"]))
    {
        echo "Please fill the form";
        exit;
    }
     
$name = $_POST["name"];
$email = $_POST["message"];
 
mail( 'ryan.theisen@asu.edu' , 'New form submission' , 
"New form submission: Name: $name, Email:$email"  );
 
header('Location: thank-you.html');
 
?>
