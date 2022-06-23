<?php

declare(strict_types=1);
require_once __DIR__ . '/Main.php';
$main = new \Telegram\Main();
$main->sendMessage('\[*ping*]');