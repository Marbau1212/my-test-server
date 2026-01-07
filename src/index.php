<!DOCTYPE html>
<html lang="de"><head><meta charset="UTF-8"><title>Test-Aktion</title><style>body{font-family:sans-serif;max-width:600px;margin:2em auto;padding:1em;line-height:1.6;border:1px solid #ccc;border-radius:5px;}input[type=text]{width:100%;padding:8px;margin-bottom:10px;box-sizing:border-box;}input[type=submit]{padding:10px 15px;background-color:#007bff;color:white;border:none;border-radius:4px;cursor:pointer;}.result{margin-top:20px;padding:10px;background-color:#e9ecef;border-radius:4px;}</style></head>
<body><h1>Test-Aktion abwickeln</h1><p>Gib einen Text ein und klicke auf "Absenden".</p>
<form action="handle_action.php" method="post"><label for="action_data">Deine Daten:</label><input type="text" id="action_data" name="action_data" required><input type="submit" value="Absenden"></form>
<?php if (isset($_GET['result'])) { echo '<div class="result"><h3>Ergebnis:</h3>' . htmlspecialchars($_GET['result']) . '</div>'; } ?>
</body></html>