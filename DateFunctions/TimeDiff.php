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

$sql = 'SELECT TIMEDIFF("13:10:11", "13:10:10") AS result;';
runDateFunction($conn, $sql, "TIMEDIFF()");
?>
</body>
</html>