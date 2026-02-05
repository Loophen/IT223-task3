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

$sql = 'SELECT HOUR("2017-06-20 09:34:00") AS result;';
runDateFunction($conn, $sql, "HOUR()");
?>
</body>
</html>