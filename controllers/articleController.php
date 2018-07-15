<?php
    require("./models/article.php");

    class ArticleController {
        public function action($url){
            $page = parse_url($url);
            parse_str($page['query'], $query);
            $id= (int)str_replace(' ', '', $query['id']);
            if($id == 0) {
                include("./views/pagenotfound.php");
            }
            else {
                $article = new Article();
                $article->get($id);
                $result = $article->article;
                if(count($result) == 1) {
                    include("./views/article.php");
                    renderArticle($result);
                }
                else{
                    include("./views/pagenotfound.php");
                }
            }
        }
    }
?>