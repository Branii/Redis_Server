<?php 
class HistoryManager {

    public static function manageGameIds1x0(array $gameIds) : string {
        foreach ($gameIds as $gameId) {
            HistoryGenerator::render($gameId);
        }
        return "Data successfully saved!"; 
    }

    public static function manageGameIds1x5(array $gameIds) : string {
        return '';
    }

    public static function manageGameIds3x0(array $gameIds) : string {
        return '';
    }

    public static function manageGameIds5x0(array $gameIds) : string {
        return '';
    }

}