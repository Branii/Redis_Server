<?php 

class Model {

    public function getLastTenDraws(string $gameId): array {
        $tableName = GamesTableMap::getRequiredTable()[$gameId]['draw_table'];
        $sql = "SELECT draw_number FROM $tableName ORDER BY draw_id DESC LIMIT 10";
        return Helper::selectAll($sql);
    }

}