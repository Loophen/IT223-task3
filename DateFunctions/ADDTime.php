<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Time</title>
</head>
<body>
    <?php
include "../config/db.php";
include "../config/functions.php";

$sql = 'SELECT ADDTIME("2017-06-15 09:34:21", "2") AS result;';
runDateFunction($conn, $sql, "ADDTIME()");
?>
</body>
</html>