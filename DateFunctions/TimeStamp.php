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

$sql = 'SELECT TIMESTAMP("2017-07-23", "13:10:11") AS result;';
runDateFunction($conn, $sql, "TIMESTAMP()");
?>
</body>
</html>