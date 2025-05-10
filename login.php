<?php

if ($_POST['reg']) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $registration = $_POST['registration'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    if ($username !== "" && $email !== "" && $registration !== "" && $phone !== "" && $country !== "") {
        include 'php_connection.php';

        $query = "INSERT INTO login_tbl  VALUES ('$username','$email','$phone','$registration','$country')";
        $data = mysqli_query($conne, $query);
        if ($data) {
            echo "Data inserted successfully";
        } else {
            echo "Data not inserted" . mysqli_error($conne);
        }

    } else {
        echo "All fields are required";
    }

} elseif (isset($_POST['display'])) {
    include 'php_connection.php';
    $displ = "SELECT * FROM login_tbl";
    $displ = mysqli_query($conne, $displ);
    if ($displ) {
        header("Location: display.php");
    } else {
        echo "Data not displayed" . mysqli_error($conne);
    }
}



?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        Name:<br>
        <input type="text" name="name"><br><br>
        Email:<br>
        <input type="email" name="email"><br><br>
        Register:<br>
        <input type="text" name="phone"><br><br>
        Phone Number:<br>
        <input type="text" name="registration"><br><br>
        Country:<br>
        <select name="country" id="country">
            <option value="Nepal">Nepal</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
        </select><br><br>
        <input type="submit" value="Submit" name="reg"><br><br>
        <input type="reset" value="Reset"><br><br>
        <button value="Display" name="display">Display<br><br>
    </form>
</body>

</html>