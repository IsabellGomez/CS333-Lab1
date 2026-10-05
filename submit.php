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
    <title>Form Results</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>Form Submission</h1>
        <p>Here is the information you submitted.</p>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="aboutme.html">About Me</a>
        <a href="form.html">Contact Form</a>
        <a href="submit.php">Form Results</a>
    </nav>

    <main>

        <div class="results">
            <p>
                <strong>Name:</strong>
                <span><?= $name ?></span>
            </p>

            <p>
                <strong>Email:</strong>
                <span><?= $email ?></span>
            </p>

            <p>
                <strong>Message:</strong>
                <span><?= $message ?></span>
            </p>
        </div>

    </main>

    <footer>
    </footer>

</body>
</html>