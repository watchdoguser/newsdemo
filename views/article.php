<html>
    <head>
        <link href="./www/css/article.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
    <?php
        function renderArticle($article){
            echo "<div class=\"main-content\">";
            foreach($article as $item) {
                echo "<div class=\"main-title\"><h3>".$item->title."</h3></div><br />";
                echo "<div class=\"article\">".$item->content ."</div><br />";
            }
            echo "<div class=\"all-news\"><a href=\"/news.php?page=1\">Все новости >></a></div><br />";
            echo "</div>";
        }
    ?>
    </body>
</html>