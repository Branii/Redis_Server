<?php 
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includer.php';
$loop = React\EventLoop\Loop::get();

#create event loop
$timer = $loop->addTimer(5, function () {

    $currentTime = date('H:i:s');

     // set cache ready for all games
     if(isset(Timers::time1x0()[$currentTime])){
        HistoryManager::manageGameIds(GameIdGroup::get1x0());
     }

     if(isset(Timers::time1x5()[$currentTime])){
        HistoryManager::manageGameIds(GameIdGroup::get1x5());
     }

     if(isset(Timers::time3x0()[$currentTime])){
        HistoryManager::manageGameIds(GameIdGroup::get3x0());
     }

     if(isset(Timers::time5x0()[$currentTime])){
        HistoryManager::manageGameIds(GameIdGroup::get5x0());
     }

});

#start the loop
$loop->run();