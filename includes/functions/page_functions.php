<?php
function getPage($page){
    global $twig;
    return $twig->render('main.html', [
        "page" => $page
    ]);
}