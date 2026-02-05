<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php
include "../config/db.php";
include "../config/functions.php";

$sql = 'SELECT SUBTIME("2017-06-15 10:24:21.000004", "5.000001") AS result;';
runDateFunction($conn, $sql, "SUBTIME()");
?>
</body>
</html>