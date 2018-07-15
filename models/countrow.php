<?php

    class CountRow {
        public $count;

        public function get(){
            $dblogic = new DBLogic();
            $resConnect = $dblogic->connect();

            if($resConnect == 0){
                $this->count = $dblogic->rowCount('SELECT COUNT(*) as count FROM news');
            }
        }
    }
?>