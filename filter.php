<?php
$firstname = $_POST['fName'];
$new_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);

$lastname = $_POST['lName'];
$new_lastname = filter_var($lastname, FILTER_SANITIZE_STRING);

$gender = $_POST['gender'];

$email = $_POST['email']; //Sanitizing and validate email
$new_email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($email, FILTER_VALIDATE_EMAIL) === true){
    print_r(new_email);
} else {
    $errors['new_email'] = 'Email is not valid!';
}

$occupation = $_POST['occupation'];
$new_occupation = filter_var($occupation, FILTER_SANITIZE_STRING);

$country = $_POST['country'];
$new_country = filter_var($country, FILTER_SANITIZE_STRING);

$subject = $_POST['subject'];
$new_subject = filter_var($subject, FILTER_SANITIZE_STRING);

$message = $_POST['message'];


if (count($errors)> 0){
	echo "There are mistakes!";
	print_r($errors);
	exit;
}
?>