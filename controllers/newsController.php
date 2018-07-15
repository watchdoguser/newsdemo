<?php
    require("./models/news.php");
    require("./models/countrow.php");

    class NewsController {
        public function action($url){
            if($url == "/news.php") {
                $this->getView(1);
            }
            else {
                $page = parse_url($url);
                parse_str($page['query'], $query);
                $num = (int)str_replace(' ', '', $query['page']);
                if($num == 0) {
                    include("./views/pagenotfound.php");
                }
                else {
                    $this->getView($num);
                }
            }
        }

        private function getView($num){
            $news = new News();
            $news->get($num);
            if(count($news->articleArray) > 0) {
                $countRow = new CountRow();
                $countRow->get();
                include('./views/news.php');
                renderNews($news->articleArray, ceil($countRow->count / 5), $num);
            }
            else{
                include('./views/pagenotfound.php');
            }
        }
    }
?>