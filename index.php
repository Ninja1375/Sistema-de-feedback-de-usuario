<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Envie seu Feedback</h1>
        <form action="process.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
