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

$sql = 'SELECT STR_TO_DATE("August 10 2017", "%M %d %Y") AS result;';
runDateFunction($conn, $sql, "STR_TO_DATE()");
?>
</body>
</html>