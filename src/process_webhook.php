<?php
// src/process_webhook.php

function processWebhook($data) {
    // Ejemplo: procesar datos del pedido
    if (isset($data['order_id'])) {
        $orderId = $data['order_id'];
        $customerName = $data['customer_name'];
        $totalAmount = $data['total_amount'];

        // Aquí podrías guardar los datos en una base de datos
        // o realizar cualquier otra acción.
        
        // Para este ejemplo, simplemente guardamos la información en un archivo de log
        file_put_contents(__DIR__ . '/../logs/webhook_log.txt', 
            "Procesando pedido: ID $orderId, Cliente $customerName, Total $totalAmount" . PHP_EOL, FILE_APPEND);
    }
}
