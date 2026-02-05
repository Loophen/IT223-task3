<!DOCTYPE html>
<html>
<head>
    <title>SQL String Function</title>
</head>
<body>

<?php
include "../config/db.php";

$sql = "SELECT FORMAT(250500.5634, 2) AS result;";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    foreach ($row as $value) {
        echo "<h3>Output:</h3>";
        echo $value;
    }
}
?>

</body>
</html>
