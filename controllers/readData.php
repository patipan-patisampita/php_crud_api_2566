<?php include_once('../config/dbcon.php'); ?>

<?php
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($con, $sql);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
print json_encode($data);
