<?php
$commands = [
    'REG USER 1459 1234',
    'ASK SECRET 1459 1234'
];

$host = '144.22.201.166';
$port = 9000;      

function sendCommand($host, $port, $command) {
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if ($socket === false) {
        echo "Erro ao criar o socket: " . socket_strerror(socket_last_error()) . "\n";
        return;
    }

    $result = socket_connect($socket, $host, $port);
    if ($result === false) {
        echo "Erro ao conectar ao servidor: " . socket_strerror(socket_last_error($socket)) . "\n";
        socket_close($socket);
        return;
    }

    socket_write($socket, $command, strlen($command));

    $response = socket_read($socket, 2048);
    echo "Comando: '$command'\n";
    echo "Resposta do servidor: " . htmlspecialchars($response) . "\n";

    socket_close($socket);
}

foreach ($commands as $command) {
    sendCommand($host, $port, $command);
}
?>
