<?php
echo "Client running\n";
$socket = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REQ);
$socket->connect("tcp://php-server:5555");
echo "Client connected to 5555\n";
while (true) {
    $socket->send("Hello There");
    $message = $socket->recv();
    echo "Client received message: $message\n";
    sleep(2);
}