<?php
require 'vendor/autoload.php';
require 'env.php';
use ArdaGnsrn\Ollama\Ollama;

header('Content-Type: text/plain');

$config = [
    'productData' => json_decode(file_get_contents(__DIR__ . "/data/legion5.json"), true),
    'systemPrompt' => trim(file_get_contents(__DIR__ . "/config/prompt.txt")),
    'blockedWords' => json_decode(file_get_contents(__DIR__ . "/config/blocked-keywords.json"), true)
];

$input = json_decode(file_get_contents('php://input'), true);
$prompt = $input['prompt'] ?? '';

// Filter off-topic questions
function ifOffTopic($prompt, $blockedWords) {
    $lowerPrompt = strtolower($prompt);
    foreach ($blockedWords as $word) {
        if (strpos($lowerPrompt, $word) !== false) return true;
    }
    return false;
}

if (ifOffTopic($prompt, $config['blockedWords'])) {
    sleep(2);
    echo "I'm here to help with questions about the Lenovo Legion 5! Feel free to ask about its specs or features.";
    exit;
}

// Build prompt
$specs = json_encode($config['productData']['Lenovo Legion 5'], JSON_PRETTY_PRINT);
$fullPrompt = $config['systemPrompt'] . "\n\nProduct Specifications:\n" . $specs . "\n\n" .
    "User Question: " . $prompt . "\nYour Answer:";

// Get model response
try {
    $client = Ollama::client($_ENV['BASE_URL']);
    $completions = $client->completions()->create([
        'model' => 'qwen2.5:1.5b',
        'prompt' => $fullPrompt,
        'stream' => false,
        'options' => [
            'num_predict' => 100,
            'temperature' => 0.3,
        ]
    ]);

    error_log("Response received");

    if (isset($completions->response) && !empty(trim($completions->response))) {
        $response = trim($completions->response);
        error_log("Response content: " . $response);
        echo $response;
    } else {
        error_log("Empty or no response");
        error_log("Full response: " . print_r($completions, true));
        echo "I can only answer questions about Lenovo Legion 5.";
    }
} catch (Exception $e) {
    error_log("Exception: " . $e->getMessage());
    echo "Error: " . $e->getMessage();
}