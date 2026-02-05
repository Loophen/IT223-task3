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

$sql = 'SELECT DATE_FORMAT("2017-06-15", "%Y") AS result;';
runDateFunction($conn, $sql, "CURRENT_TIME()");
?>
</body>
</html>