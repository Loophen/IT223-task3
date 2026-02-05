<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curennt Date</title>
</head>
<body>
    <?php
include "../config/db.php";
include "../config/functions.php";

$sql = 'SELECT CURRENT_DATE() AS result;';
runDateFunction($conn, $sql, "CURRENT_DATE()");
?>
</body>
</html>