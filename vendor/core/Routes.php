<?php

// Маршруты

return [
    '~^$~' => [controllers\MainController::class, 'main'],
    '~^articles/(\d+)$~' => [controllers\ArticlesController::class, 'view'],
];