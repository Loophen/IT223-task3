<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURDATE</title>
</head>
<body>
    <?php
include "../config/db.php";
include "../config/functions.php";

$sql = 'SELECT CURDATE() AS result;';
runDateFunction($conn, $sql, "CURDATE()");
?>
</body>
</html>