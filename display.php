<?php
include 'php_connection.php';
$displ = "SELECT * FROM login_tbl";
$disp = mysqli_query($conne, $displ);
if ($disp) {
    echo "Data displayed successfully";
    $total = mysqli_num_rows($disp);
    echo "TOTAL NUMBER OF RECORDS IS " . $total;
} else {
    echo "Data not displayed" . mysqli_error($conne);
}
?>