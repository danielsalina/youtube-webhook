<?php
// src/webhook.php

// Archivo para registrar logs
$logFile = __DIR__ . '/../logs/webhook_log.txt';

// Capturar la solicitud POST que contiene los datos del webhook
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Verificar si hay datos válidos
if ($data) {
    // Registrar los datos en un archivo de log
    file_put_contents($logFile, date("Y-m-d H:i:s") . " - Webhook recibido: " . json_encode($data) . PHP_EOL, FILE_APPEND);

    // Llamar a la lógica de procesamiento del webhook
    require_once 'process_webhook.php';
    processWebhook($data);

    // Enviar respuesta exitosa al proveedor del webhook
    http_response_code(200);
    echo json_encode(["message" => "Webhook recibido correctamente"]) . "\n";
} else {
    // Si no se recibieron datos, enviar un error
    http_response_code(400);
    echo json_encode(["message" => "Datos inválidos"]);
}
