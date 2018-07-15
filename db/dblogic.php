<?php
    class DBLogic {
        private $host;
        private $dbname;
        private $user; 
        private $pass; 
        private $dbh;
        
        function __construct() {
            $this->host = "localhost";
            $this->dbname = "testDB";
            $this->user = "root";
            $this->pass = "";
        }

        public function connect(){
            try{
                $this->dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
                $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return 0;
            }
            catch(PDOException $e) {
                file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); 
                return 1;
            }
        }

        public function read($sql){
            //$sth = $this->dbh->prepare("SELECT * from news");
            $sth = $this->dbh->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $rows = $sth->fetchAll();
            return $rows;
        }

        public function rowCount($sql) {
            $rowcount=$this->dbh->query($sql)->fetchColumn();
            return $rowcount;
        }
    }
?>