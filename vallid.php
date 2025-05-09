<!DOCTYPE html>
<html>


<head>
    <title>Form</title>
</head>


<body>
    <h2>Registration Form For The Validation</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="userid">User ID :</label>
        <input type="text" id="userid" name="userid"><br>
        <span style="color:red"><?php echo $errors['userid']; ?></span><br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password"><br>

        <label for="firstname">First Name :</label>
        <input type="text" id="firstname" name="firstname"><br>

        <label for="address">Address :</label>
        <input type="text" id="address" name="addr"><br>

        <label for="country">Country :</label>
        <select id="country" name="country">
            <option value="nepal">Nepal</option>
            <option value="india">India</option>
        </select><br>

        <label for="zipcode">ZIP Code :</label>
        <input type="text" id="zipcode" name="zipcode"><br>

        <label for="email">Email :</label>
        <input type="" id="email" name="email"><br>

        <label>Sex:</label>
        <input type="radio" id="male" name="sex" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="sex" value="female">
        <label for="female">Female</label><br>

        <label>Language:</label>
        <input type="checkbox" id="english" name="language" value="English">
        <label for="english">English</label>
        <input type="checkbox" id="nonenglish" name="language" value="Non English">
        <label for="nonenglish">Nonenglish</label><br>

        <label for="about">About:</label><br>
        <textarea id="about" name="about"></textarea><br>

        <input type="submit" value="Submit">
    </form>

</body>


</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $address = $_POST["addr"];
    $zipcode = $_POST["zipcode"];
    $email = $_POST["email"];
    $sex = $_POST["sex"] ?? '';
    $language = $_POST["language"];


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
?>