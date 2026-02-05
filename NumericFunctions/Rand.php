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

$sql = "SELECT RAND() AS result;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>RAND()</h3>";
echo $row['result'];
?>

</body>
</html>