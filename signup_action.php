<?php
// Get the data from the form using the 'name' attributes
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Define the name of the file where you want to store the data
$file = 'user_data.txt';

// Open the file in 'append' mode ('a') to add new data without deleting the old data
$file_handle = fopen($file, 'a');

// Write the formatted data to the file, with a new line for each entry
fwrite($file_handle, "Username: $username, Email: $email, Password: $password\n");

// Close the file
fclose($file_handle);

// Redirect the user back to the signup page or a simple "Thank You" page
header("Location: thank_you.html");
exit;
?>