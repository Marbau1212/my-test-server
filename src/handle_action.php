<?php
if (isset($_POST['action_data'])) {
    $input = htmlspecialchars($_POST['action_data']);
    $processed_data = "Du hat '" . $input . "' gesendet. Verarbeitung erfolgreich! Zeit: " . date('H:i:s');
    header('Location: index.php?result=' . urlencode($processed_data));
    exit();
} else { header('Location: index.php'); exit(); }
?>