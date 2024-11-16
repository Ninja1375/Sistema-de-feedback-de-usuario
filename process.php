<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Salvando em um arquivo
    $file = fopen("feedbacks.txt", "a");
    fwrite($file, "Nome: $name\nE-mail: $email\nFeedback: $feedback\n---\n");
    fclose($file);

    echo "<h1>Obrigado pelo seu feedback, $name!</h1>";
    echo "<a href='index.php'>Voltar</a>";
}
?>
