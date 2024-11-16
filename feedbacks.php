<?php
$filename = "feedbacks.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "<h1>Feedbacks Recebidos</h1>";
    echo "<pre>$content</pre>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "<h1>Nenhum feedback enviado ainda.</h1>";
    echo "<a href='index.php'>Voltar</a>";
}
?>
