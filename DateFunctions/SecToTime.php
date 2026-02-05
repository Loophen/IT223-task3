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

$sql = 'SELECT SEC_TO_TIME(1) AS result;';
runDateFunction($conn, $sql, "SEC_TO_TIME()");
?>
</body>
</html>