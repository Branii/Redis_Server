<?php
require '../../../vendor/autoload.php';
$path = __DIR__ . '/includer.php';
require '../../core/RedisClient.php';
require '../../core/CacheClient.php';

app()->get('/v1/std/{gameId}', function ($gameId) {
    response()->json(['standard' => json_decode(CacheClient::pull($gameId))]);
});

app()->get('/v1/two/{gameId}', function ($gameId) {
    response()->json(['message' => 'Hello World!']);
});

app()->get('/v1/boa/{gameId}', function ($gameId) {
    response()->json(['message' => 'Hello World!']);
});

app()->run();

//var_dump($path);

