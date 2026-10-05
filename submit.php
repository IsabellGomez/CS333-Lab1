<?php
$name = htmlspecialchars($_GET['name'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_GET['email'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_GET['message'] ?? '', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Submission Results</h1>
        <div id="result">
            <p><strong>Name:</strong> <code><?= $name ?></code></p>
            <p><strong>Email:</strong> <code><?= $email ?></code></p>
            <p><strong>Message:</strong> <code><?= $message ?></code></p>
        </div>
    </div>
        </div>

    <p>
        <a href="index.html">Back to Home</a>
    </p>
</body>
</html>
</body>

</html>