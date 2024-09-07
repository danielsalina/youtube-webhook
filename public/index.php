<?php
// public/index.php

$logFile = __DIR__ . '/../logs/webhook_log.txt';
$logs = file_get_contents($logFile);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webhook Notificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container mt-5">
    <h1 class="secondary">Notificaciones de Webhooks</h1>
    <pre class="bg-light p-3"><?php echo htmlspecialchars($logs ? $logs : 'No se han recibido webhooks aún.'); ?></pre>
</div>
</body>
</html>
