
<?php

$class = $_POST['classid'];
require 'sql/pdo.php';
$rows = getMessage($class);
if ($rows == 0) {
} else {
    header('Content-Type: application/json');
    echo json_encode($rows);
}
?>
