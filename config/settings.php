<?php
return [
    'settings' => [
        'displayErrorDetails' => strtolower(getenv('ENVIRONMENT')) !== 'production',
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../views/',
        ],
        // Monolog settings
        'logger' => [
            'name' => getenv('LOG_NAME') ?: 'inferno-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => getenv('LOG_LEVEL') ?: \Monolog\Logger::DEBUG,
        ],
    ],
];
