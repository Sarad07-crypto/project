<?php

function validateForm($data)
{
    $errors = [];

    if (empty($data['name'])) {
        $errors[] = "Name is empty";
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }

    if (empty($data['phone']) || !preg_match('/^\+?(\d{1,3})?[-.\s]?(\(?\d{3}\)?)[-.\s]?\d{3}[-.\s]?\d{4}$/', $data['phone'])) {
        $errors[] = "Phone number is not valid";
    }

    if (empty($data['registration'])) {
        $errors[] = "Registration is empty";
    }

    if (empty($data['country'])) {
        $errors[] = "Country is empty";
    }

    return $errors;
}
?>