<?php
function runDateFunction($conn, $sql, $title) {
    $result = $conn->query($sql);

    echo "<h2>$title</h2>";

    if ($result && $row = $result->fetch_assoc()) {
        foreach ($row as $value) {
            echo "<p><strong>Result:</strong> $value</p>";
        }
    } else {
        echo "<p>No result.</p>";
    }
}
?>