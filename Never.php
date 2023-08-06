<?php

namespace Never;

function stop():never {
    echo "Your service has been stopped" . PHP_EOL;
    exit;
}

stop();

echo "Hello World";