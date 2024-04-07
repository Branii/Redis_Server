<?php 

    class Helper extends Database {
        
        public static function query($sql,$params = []) {
            $req = parent::open()->prepare($sql);
            $req->execute($params);
            parent::close();
            return $req;
        }

        public static function selectAll($sql,$params = []) {
            $req = self::query($sql,$params);
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function selectOne($sql,$params = []) {
            $req = self::query($sql,$params);
            return $req->fetch(PDO::FETCH_ASSOC);
        }

        public static function insert($sql,$params = []) {
            $req = self::query($sql,$params);
            return $req;
            //return parent::open()->lastInsertId();
        }
        
        public static function update($sql,$params = []) {
            $req = self::query($sql,$params);
            return $req->rowCount();
        }

        public static function delete($sql,$params = []) {
            $req = self::query($sql,$params);
            return $req->rowCount();
        }

    }