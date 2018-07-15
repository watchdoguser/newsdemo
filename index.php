<?php
	require("./controllers/newsController.php");
	require("./controllers/articleController.php");
	require("./db/dblogic.php");
	/*
	require("./controllers/articleController.php");
	$articleController = new ArticleController();
	$articleController->action();
	require("./controllers/pageController.php");?page=10
	$pageController = new PageController();
	$pageController->action(1);*/
	$url = $_SERVER['REQUEST_URI'];
	if($url == "/"){
		$newsController = new NewsController();
		$newsController->action("/news.php");
	}
	else {
		$reqArray = parse_url($url);
		switch($reqArray['path']){
			case "/news.php": 
				$newsController = new NewsController();
				$newsController->action($url);
				break;
			case "/view.php": 
				$articleController = new ArticleController();
				$articleController->action($url);
				break;
			default: include('./views/pagenotfound.php');break;
		}
	}
?>
