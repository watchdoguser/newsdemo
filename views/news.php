<html>
    <head>
        <link href="./www/css/news.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
        
    <?php
        function renderNews($articleArray, $countRow, $currentPage){
            echo "<div class=\"main-content\">";
            echo "<div class=\"main-title\"><h3>Новости</h3></div><br />";
            foreach($articleArray as $item) {
                echo("<div class=\"article\">");
                echo "<div class=\"date\">".gmdate("d.m.Y ", $item->idate)."</div>";
                echo "<div class=\"title\"><a href=\"/view.php?id=".$item->id."\">".$item->title."</a></div><br />";
                echo "<div>".$item->announce ."</div><br />";
                echo("</div>");
            }
            echo "<div class=\"num-page-title article\"><h3>Страницы:</h3></div>";
            echo "<div class=\"num-page article\">";
            for($i = 1; $i <= $countRow; $i++){
                if($i == $currentPage){
                    echo "<div class=\"num-box active-page\">".$i."</div>";
                }
                else {
                    echo "<div class=\"num-box\">".$i."</div>";
                }
            }
            echo "</div>";
            echo "</div>";
        }
    ?>
    <script src="./www/js/news.js"></script>
    </body>
</html>