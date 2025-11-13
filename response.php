<?php 
require 'vendor/autoload.php';
require 'env.php';
use ArdaGnsrn\Ollama\Ollama;

header('Content-Type: application/json');

$client = Ollama::client( $_ENV['BASE_URL']);

$input = json_decode(file_get_contents('php://input'), true);
$prompt = $input['prompt'] ?? '';

$completions = $client->chat()->create([
    'model' => 'qwen3:0.6b',
    'messages' => [
        ['role' => 'system', 'content' => $_ENV['PROMPT'] ],
        ['role' => 'user', 'content' => $prompt ]
    ]
]);

echo $completions->message->content;


