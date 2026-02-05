<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATE</title>
</head>
<body>
    <?php
include "../config/db.php";
include "../config/functions.php";

$sql = 'SELECT ADDDATE("2017-06-15", INTERVAL 10 DAY) AS result';
runDateFunction($conn, $sql, "ADDDATE()");
?>
</body>
</html>
