<?php 
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includer.php';
$loop = React\EventLoop\Loop::get();

#create event loop
$timer = $loop->addPeriodicTimer(1, function () {

     echo $currentTime = date('H:i:s'); 
     // set cache ready for all games
     if(isset(Timers::time1x0()[$currentTime])){
        echo HistoryManager::manageGameIds1x0(GameIdGroup::get1x0());
     }

   //   if(isset(Timers::time1x5()[$currentTime])){
   //      HistoryManager::manageGameIds1x5(GameIdGroup::get1x5());
   //   }

   //   if(isset(Timers::time3x0()[$currentTime])){
   //      HistoryManager::manageGameIds3x0(GameIdGroup::get3x0());
   //   }

   //   if(isset(Timers::time5x0()[$currentTime])){
   //      HistoryManager::manageGameIds5x0(GameIdGroup::get5x0());
   //   }

});

#start the loop
$loop->run();