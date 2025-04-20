<?php
$filename = 'events.json';

// Create the file if it doesn't exist
if (!file_exists($filename)) {
    file_put_contents($filename, json_encode([]));
}

$events = json_decode(file_get_contents($filename), true);

// Handle POST - Add a new event
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data && isset($data['name'], $data['type'], $data['date'], $data['description'], $data['image'])) {
        $events[] = $data;
        file_put_contents($filename, json_encode($events, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success']);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid data']);
    }
    exit;
}

// Handle DELETE - Remove an event
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['index']) && is_numeric($data['index']) && isset($events[$data['index']])) {
        array_splice($events, $data['index'], 1);
        file_put_contents($filename, json_encode($events, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'deleted']);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid index']);
    }
    exit;
}

// Handle GET - Return all events
header('Content-Type: application/json');
echo json_encode($events);
