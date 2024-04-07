<?php

class HistoryGenerator {

    public static function findPattern(array $pattern, array $drawNumbers): bool {
        $drawNumbers = array_count_values(array_slice($drawNumbers, 0, 5));
        sort($drawNumbers);
        sort($pattern);
        return $drawNumbers === $pattern;
    }

    public static function render(string $gameId){

        try {
           
            $drawNumber = (new Model)->getLastTenDraws($gameId);

            //$drawNumber = array_reverse($drawNumber);
            $counts = ['g120' => 1, 'g60' => 1, 'g30' => 1];$data = [];
    
            foreach ($drawNumber as $draw) {
                $row = [];
                if (self::findPattern([1, 1, 1, 1, 1], $draw)) { // Check for no repeats
                    $row['g120'] = 'g120';
                    $counts['g120'] = 1; // Reset count for g120
                } else {
                    $row['g120'] = $counts['g120']++;
                }
                if (self::findPattern([2, 1, 1, 1], $draw)) { // Check for one pair
                    $row['g60'] = 'g60';
                    $counts['g60'] = 1; // Reset count for g60
                } else {
                    $row['g60'] = $counts['g60']++;
                }
                if (self::findPattern([2, 2, 1], $draw)) { // Check for two pairs
                    $row['g30'] = 'g30';
                    $counts['g30'] = 1; // Reset count for g30
                } else {
                    $row['g30'] = $counts['g30']++;
                }
    
                array_push($data, $row);
            }
            //echo json_encode($data);
            CacheClient::push($gameId,json_encode($data));

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       


        // $redis = new RedisClient();
        // $gameIds = $redis->lrange("gameIds", 0, -1);
        // if(in_array($gameId, $gameIds)){
        //     $redis->lrem("gameIds", 0, $gameId);
        // }
        // $redis->lpush("gameIds", $gameId);
        // $gameIds = $redis->lrange("gameIds", 0, -1);
        // return $gameIds;
    }

}



