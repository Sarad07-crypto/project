<?php
function test_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = test_input($_POST["userid"]);
    $password = test_input($_POST["password"]);
    $firstname = test_input($_POST["firstname"]);
    $address = test_input($_POST["addr"]);
    $zipcode = test_input($_POST["zipcode"]);
    $email = test_input($_POST["email"]);
    $sex = $_POST["sex"] ?? '';
    $language = $_POST["language"] ?? [];


    if (empty($userid)) {
        $errors['userid'] = "User ID is required.";
    } elseif (strlen($userid) < 5 || strlen($userid) > 12) {
        $errors['userid'] = "User ID must be between 5 and 12 characters.";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 7 || strlen($password) > 12) {
        $errors['password'] = "Password must be between 7 and 12 characters.";
    }

    if (empty($firstname)) {
        $errors['firstname'] = "First Name is required.";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $firstname)) {
        $errors['firstname'] = "First Name must contain only letters.";
    }

    if (empty($address)) {
        $errors['address'] = "Address is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9\s]+$/", $address)) {
        $errors['address'] = "Address must be alphanumeric.";
    }

    if (empty($zipcode)) {
        $errors['zipcode'] = "ZIP Code is required.";
    } elseif (!preg_match("/^\d+$/", $zipcode)) {
        $errors['zipcode'] = "ZIP Code must contain only numbers.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($sex)) {
        $errors['sex'] = "Sex is required.";
    }

    if (empty($language)) {
        $errors['language'] = "Please select at least one language.";
    }

    //----Output results
    if (empty($errors)) {
        echo "<h3>Registration Successful!</h3>";
    } else {
        echo "<h3>Validation Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li style=color:red>$error</li>";
        }
        echo "</ul>";
    }
}
