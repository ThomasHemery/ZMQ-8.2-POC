<?php
echo "Server running\n";
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_REP);
$socket->bind("tcp://0.0.0.0:5555");
echo "Server bound to 5555\n";
echo "Server going into wait loop\n";
while (true) {
    $message = $socket->recv();
    echo "Server received message: $message\n";
    $socket->send("General Kenobi!");
}