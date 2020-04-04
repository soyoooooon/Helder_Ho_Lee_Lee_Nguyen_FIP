<?php
require_once 'scripts/load.php';


$header = getHeader();
$hero = getHero();
$about = getAbout();
$workshop = getWork();
$events = getEvents();
$why = getWhy();
$facts = getFacts();
$test = getTest();
$join = getJoin();
$news = getNews();
$footer = getFooter();

if($header){
    $header_info = $header->fetch(PDO::FETCH_ASSOC);
    var_dump($header_info);
};
if($hero){
    $hero_info = $hero->fetch(PDO::FETCH_ASSOC);
    var_dump($hero_info);
};
if($about){
    $about_info = $about->fetch(PDO::FETCH_ASSOC);
    var_dump($about_info);
};
if($workshop){
    $workshop_info = $workshop->fetch(PDO::FETCH_ASSOC);
    var_dump($workshop_info);
};
if($events){
    $events_info = $events->fetch(PDO::FETCH_ASSOC);
    var_dump($events_info);
};
if($why){
    $why_info = $why->fetch(PDO::FETCH_ASSOC);
    var_dump($why_info);
};
if($facts){
    $facts_info = $facts->fetch(PDO::FETCH_ASSOC);
    var_dump($facts_info);
};
if($test){
    $test_info = $test->fetch(PDO::FETCH_ASSOC);
    var_dump($test_info);
};
if($join){
    $join_info = $join->fetch(PDO::FETCH_ASSOC);
    var_dump($join_info);
};
if($news){
    $news_info = $news->fetch(PDO::FETCH_ASSOC);
    var_dump($news_info);
};
if($footer){
    $footer_info = $footer->fetch(PDO::FETCH_ASSOC);
    var_dump($footer_info);
};

