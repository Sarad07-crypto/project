<?php
$name = $address = $phone = $registration = $country = "";
$nameerror = $addresserror = $phoneerror = $registrationerror = $countryerror = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['namee'];

    $phone = $_POST['phonee'];
    $registration = $_POST['registrationn'];
    $country = $_POST['countryy'];

    if (empty($name)) {
        $nameerror = "Name is empty";
    }
    if (empty($address)) {
        $addresserror = "Address is empty";
    }
    if (empty($phone)) {
        $phoneerror = "Phone number is empty";
    } elseif (!preg_match('/^\+?(\d{1,3})?[-.\s]?(\(?\d{3}\)?)[-.\s]?\d{3}[-.\s]?\d{4}$/', $phone)) {
        $phoneerror = "Phone number is not valid";
    }
    if (empty($registration)) {
        $registrationerror = "Registration is empty";
    }
    if (empty($country)) {
        $countryerror = "Country is empty";
    }
}
?>