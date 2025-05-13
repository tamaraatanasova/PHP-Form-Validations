<?php
$errors = [
    'name' => '',
    'surname' => '',
    'email' => '',
    'username' => '',
    'phone' => '',
    'dob' => '',
    'password' => '',
];
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $dob = trim($_POST['dob']);
    $password = trim($_POST['password']);
    
    if (isEmpty($name)) $errors['name'] = 'Name is required.';
    if (isEmpty($surname)) $errors['surname'] = 'Surname is required.';
    if (isEmpty($email) || !isValidEmail($email)) $errors['email'] = 'Enter a valid email with at least 5 characters before @.';
    if (isEmpty($username) || !isValidUsername($username)) $errors['username'] = 'Username must be at least 6 characters and must have spaces or special characters.';
    if (isEmpty($phone) || !isNumeric($phone)) $errors['phone'] = 'Phone number must be numeric.';
    if (isEmpty($dob) || !isAdult($dob)) $errors['dob'] = 'You must be at least 18 years old.';
    if (isEmpty($password) || !isValidPassword($password)) $errors['password'] = 'Password must have one number, one special character, and one uppercase letter.';
    if (empty(array_filter($errors))) {
        $successMessage = "Sign-up successful! Welcome aboard.";
    }
}

function isEmpty($value) {
    return empty(trim($value));
}

function isValidUsername($username) {
    return preg_match('/^[a-zA-Z0-9_]+$/', $username) && strlen($username) >= 6 ;
}

function isValidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;

    $parts = explode('@', $email);
    if (strlen($parts[0]) < 5) return false;

    return true;
}

function isNumeric($value) {
    return is_numeric($value);
}

function isAdult($dob) {
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;
    
    return $age >= 18;
}

function isValidPassword($password) {
    return preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[\W]/', $password) && strlen($password) >= 8;  
}


