<?php

    class News {
        const ARTICLES_ON_PAGE = 5;
        public $articleArray;
        public $num;

        public function get($num){
            $this->num = $num;
            $dblogic = new DBLogic();
            $resConnect = $dblogic->connect();

            if($resConnect == 0){
                $Limit = self::ARTICLES_ON_PAGE * $this->num - self::ARTICLES_ON_PAGE;
                $this->articleArray = $dblogic->read("SELECT * from news ORDER BY idate DESC LIMIT ".$Limit.", ".self::ARTICLES_ON_PAGE);      
            }
        }
    }
?>