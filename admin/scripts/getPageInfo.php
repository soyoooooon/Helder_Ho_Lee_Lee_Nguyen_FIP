<?php

    function getHeader(){
        $pdo = Database::getInstance()->getConnection();
        $getHeader = 'SELECT * FROM header';
        $header = $pdo->prepare($getHeader);
        $header->execute();
        if($header){
            return $header;
        }else{
            return false;
        }
    }
    function getHero(){
        $pdo = Database::getInstance()->getConnection();
        $getHero = 'SELECT * FROM hero';
        $hero = $pdo->prepare($getHero);
        $hero->execute();
        if($hero){
            return $hero;
        }else{
            return false;
        }
    }
    function getAbout(){
        $pdo = Database::getInstance()->getConnection();
        $getAbout = 'SELECT * FROM about';
        $about = $pdo->prepare($getAbout);
        $about->execute();
        if($about){
            return $about;
        }else{
            return false;
        }
    }
    function getWork(){
        $pdo = Database::getInstance()->getConnection();
        $getWorkshop = 'SELECT * FROM workshop';
        $workshop = $pdo->prepare($getWorkshop);
        $workshop->execute();
        if($workshop){
            return $workshop;
        }else{
            return false;
        }
    }
    function getEvents(){
        $pdo = Database::getInstance()->getConnection();
        $getEvents = 'SELECT * FROM events';
        $events = $pdo->prepare($getEvents);
        $events->execute();
        if($events){
            return $events;
        }else{
            return false;
        }
    }
    function getWhy(){
        $pdo = Database::getInstance()->getConnection();
        $getWhy = 'SELECT * FROM why';
        $why = $pdo->prepare($getWhy);
        $why->execute();
        if($why){
            return $why;
        }else{
            return false;
        }
    }
    function getTrueFacts(){
        $pdo = Database::getInstance()->getConnection();
        $getFacts = 'SELECT * FROM facts WHERE id = 1 OR id = 2 OR id = 3 OR id = 4';
        $trueFacts = $pdo->prepare($getFacts);
        $trueFacts->execute();
        if($trueFacts){
            return $trueFacts;
        }else{
            return false;
        }
    }
    function getTrueNotFacts(){
        $pdo = Database::getInstance()->getConnection();
        $getNotFacts = 'SELECT * FROM facts WHERE id = 5 OR id = 6 OR id = 7 OR id = 8';
        $trueNotFacts = $pdo->prepare($getNotFacts);
        $trueNotFacts->execute();
        if($trueNotFacts){
            return $trueNotFacts;
        }else{
            return false;
        }
    }
    function getTest(){
        $pdo = Database::getInstance()->getConnection();
        $getTest = 'SELECT * FROM testing';
        $test = $pdo->prepare($getTest);
        $test->execute();
        if($test){
            return $test;
        }else{
            return false;
        }
    }
    function getMaps(){
        $pdo = Database::getInstance()->getConnection();
        $getMap = 'SELECT * FROM downtown, east_london, masonville, near_south, near_west, northeast_london, southwest_london, west_london, whitehills';
        $maps = $pdo->prepare($getMap);
        $maps->execute();
        if($maps){
            return $maps;
        }else{
            return false;
        }
    }
    function getJoin(){
        $pdo = Database::getInstance()->getConnection();
        $getJoin = 'SELECT * FROM join_us';
        $join = $pdo->prepare($getJoin);
        $join->execute();
        if($join){
            return $join;
        }else{
            return false;
        }
    }
    function getNews(){
        $pdo = Database::getInstance()->getConnection();
        $getNews = 'SELECT * FROM newsletter';
        $news = $pdo->prepare($getNews);
        $news->execute();
        if($news){
            return $news;
        }else{
            return false;
        }
    }
    function getFooter(){
        $pdo = Database::getInstance()->getConnection();
        $getFooter = 'SELECT * FROM footer';
        $footer = $pdo->prepare($getFooter);
        $footer->execute();
        if($footer){
            return $footer;
        }else{
            return false;
        }
    }


?>