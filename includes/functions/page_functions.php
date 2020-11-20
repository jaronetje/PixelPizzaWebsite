<?php
function getHeadPage(){
    global $twig;
    return $twig->render('head.html');
}
function getHeaderPage(){
    global $twig;
    return $twig->render('header.html');
}
function getTopPage(){
    return getHeadPage().getHeaderPage();
}
function getFooterPage(){
    global $twig;
    return $twig->render('footer.html');
}
function getHomePage(){
    global $twig;
    return $twig->render('home.html');
}