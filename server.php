<?php
session_start();


// connect to the database
// $db = mysqli_connect('localhost', 'fstackde_petraroot', './configuration.', 'fstackde_petracc');
$db = mysqli_connect('localhost', 'root', '', 'petracc');

// REGISTER USER
if (isset($_POST['name']) && $_POST['email'] && isset($_POST['phone'])) {
// initializing variables
$json = file_get_contents('php://input');
$data = json_decode($json);
  
}
  // receive all input values from the form
  
  // $fullname = mysqli_real_escape_string($db, $_POST['name']);
  // $email = mysqli_real_escape_string($db, $_POST['email']);
  // $phone = mysqli_real_escape_string($db, $_POST['phone']);

  $fullname = $data->name;
  $email = $data->email;
  $phone = $data->phone;


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "Full name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same email and/or email
  $user_check_query = "SELECT * FROM members WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "That email has already already exists in our database");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO members(name, email, phone) 
  			  VALUES('$fullname', '$email', '$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['success'] = "God Bless You.";

    $respone = [];

    $response->success = true;
    $respone->message = "We would connect with you as soon as possible.";
    
    echo json_encode($response);

  } else {
    $response->success = false;
    $respone->message = "An error occurred, please try again";

    echo json_encode($respone);
  }
}