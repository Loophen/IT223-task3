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

$sql = "SELECT SUM(Quantity) AS result FROM NumericFunctionsTwo;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>SUM()</h3>";
echo $row['result'];
?>

</body>
</html>