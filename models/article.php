<?php
    //require("./db/dblogic.php");

    class Article {
        public $article;
        public $id;

        public function get($id){
            $this->id = $id;
            $dblogic = new DBLogic();
            $resConnect = $dblogic->connect();

            if($resConnect == 0){
                $this->article = $dblogic->read("SELECT * from news WHERE id = '".$this->id."'");
            }
        }
    }
?>