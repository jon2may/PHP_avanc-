<?php

// define variables and set to empty values
$firstNameErr = $nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
$firstName = $name = $email = $phone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user_firstname"])) {
    echo $firstNameErr = "First name is required <br>";
  } else {
    $firstname = test_input($_POST["user_firstname"]);
  }

  if (empty($_POST["user_name"])) {
    echo $nameErr = "Last name is required <br>";
  } else {
    $name = test_input($_POST["user_name"]);
  }

  if (empty($_POST["user_email"])) 
  {
    echo $emailErr = "Email is required<br>";
  } 
    else {
    $email= test_input($_POST["user_email"]);
  }

$email = test_input($_POST["user_email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}


  if (empty($_POST["user_phone_number"])) {
    echo $phoneErr = "Phone number is required<br>";
  } else {
    $phone = test_input($_POST["user_phone_number"]);
  }
    
  if (empty($_POST["subject"])) {
    echo $subjectErr = "Subject is required<br>";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["user_message"])) {
    echo $messageErr = "Message is required<br>";
  } else {
    $messageErr = test_input($_POST["user_message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit']) && $firstName && $name && $email && $phone && $subject && $message) {
    echo "Merci " . $_POST["user_firstname"] . " " . $_POST["user_name"] . " de nous avoir contacté à propos de " . $_POST["subject"]. ". Un de nos conseiller vous contactera soit à ladresse : " . $_POST["user_email"] . " ou par téléphone au : " . $_POST["user_phone_number"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"];
}