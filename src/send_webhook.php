<?php
// src/send_webhook.php

// Datos simulados para el webhook
$data = [
    'order_id' => 1234,
    'customer_name' => 'Juan Pérez',
    'total_amount' => 99.99
];

// Inicializar cURL para enviar la solicitud POST al webhook receptor
$ch = curl_init('http://localhost/canal/src/webhook.php');

// Configurar la solicitud POST
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);
curl_close($ch);

// Mostrar la respuesta
echo "Respuesta del webhook: " . $response;
