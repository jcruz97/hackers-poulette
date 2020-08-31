<?php
include 'mailer.php';

$firstname = $_POST['fName'];
$new_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);

$lastname = $_POST['lName'];
$new_lastname = filter_var($lastname, FILTER_SANITIZE_STRING);

$gender = $_POST['genderChoice'];
$new_gender = filter_var($gender, FILTER_SANITIZE_STRING);

$email = $_POST['emailAdress']; //Sanitizing and validate email
$new_email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($new_email, FILTER_VALIDATE_EMAIL) === false){
    //print_r($new_email);
} else {
    $errors['new_email'] = 'Email is not valid!';
}

$occupation = $_POST['occupationTask'];
$new_occupation = filter_var($occupation, FILTER_SANITIZE_STRING);

$country = $_POST['countryName'];
$new_country = filter_var($country, FILTER_SANITIZE_STRING);

$subject = $_POST['subjectChoice'];
$new_subject = filter_var($subject, FILTER_SANITIZE_STRING);

$message = $_POST['messageAreaText'];
$new_message = strip_tags($message);
$clean_message = htmlentities($new_message, ENT_QUOTES, 'UTF-8');

//print_r($new_firstname);
//print_r($new_lastname);
//print_r($new_gender);
//print_r($new_occupation);
//print_r($new_subject);
//print_r($new_message);


if (count($errors)> 0){
	echo "There are mistakes!";
	print_r($errors);
	exit;
}
?>
