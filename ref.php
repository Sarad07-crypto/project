<?php
$username = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$registration = $_POST['registration'];
$country = $_POST['country'];

if ($username == '') {
    echo "Name is empty<br>";
}
if ($email == '' && $email != '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\<div class="" a-zA-Z="">2,6</div>$/') {
    echo "Email is empty<br>";
}

if (is_nan($registration)) {
    echo "Registration number is not valid<br>";
}
if ($phone != "^\+?(\d{1,3})?[-.\s]?(\(?\d{3}\)?)[-.\s]?\d{3}[-.\s]?\d{4}$" && $phone == '') {
    echo "Phone number is not valid<br>";
}


?>





<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name:*</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email*:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label type="Registration">Registration* :</label><br>
        <input type="text" id="registration" name="registration"><br><br>

        Phone Number*:<br>
        <input type="text" id="phone" name="phone"><br><br>


        Country:<br>
        <select name="country" id="country">
            <option value="Nepal">Nepal</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
        </select><br><br>
        <opttion value="India">India</opttion>







        <input type="submit" value="Submit"><br><br>
    </form>
</body>

</html>