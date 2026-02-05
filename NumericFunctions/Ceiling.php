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

$sql = "SELECT CEILING(25.75) AS result;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>CEILING()</h3>";
echo $row['result'];
?>

</body>
</html>