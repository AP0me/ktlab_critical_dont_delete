<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $allowedCommands = ['ls', 'date', 'whoami'];  // Example of an allowlist
        $inputCommand = isset($_POST['command']) ? trim($_POST['command']) : '';

        // Validate if the input command is in the allowlist
        if (in_array($inputCommand, $allowedCommands)) {
            $cmd = escapeshellcmd($inputCommand); // Secure the command
            echo "cmd: " . htmlspecialchars($cmd) . "<br>";
            echo shell_exec($cmd);
        } else {
            echo "Command not allowed.";
        }
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
