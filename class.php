<?php
session_start();
?>
<html>

<body>
    <?php
    $_SESSION["name"] = "lagrandee";
    $_SESSION["email"] = "Web";
    echo "<h1>Welcome to the PHP world</h1>";

    ?>
</body>

</html>