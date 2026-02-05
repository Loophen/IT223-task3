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

$sql = 'SELECT PERIOD_DIFF(201710, 201703) AS result;';
runDateFunction($conn, $sql, "PERIOD_DIFF()");
?>
</body>
</html>