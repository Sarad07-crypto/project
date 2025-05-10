<?php
include 'php_connection.php';
$displ = "SELECT * FROM login_tbl";
$disp = mysqli_query($conne, $displ);

if ($disp) {
    echo "Data displayed successfully";

    $total = mysqli_num_rows($disp);
    echo "TOTAL NUMBER OF RECORDS IS " . $total;
    if ($total > 0) {
        while ($data = mysqli_fetch_assoc($disp)) {
            echo " Frist name is :-" . $data['firstname'] . "<br>" . "Email id is :-" . $data['email_id'] . "<br>" . "Registeation no is :-t" . $data['register'] . "<br>" . "Phone number is :-" . $data['phone'] . "<br>" . "Country is :-" . $data['country'];
        }
    }





} else {
    echo "Data not displayed" . mysqli_error($conne);
}
?>