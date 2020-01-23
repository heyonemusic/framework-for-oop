<?php

// Маршруты

return [
    '~^hello/(.*)$~' => [controllers\MainController::class, 'sayHello'],
    '~^$~' => [controllers\MainController::class, 'main'],
    '~^bye/(.*)$~' => [controllers\MainController::class, 'sayBye'],
];