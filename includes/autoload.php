<?php
function autoload($dir){
    $files = array_diff(scandir($dir), array(".", ".."));
    foreach($files as $file){
        $filePath = $dir."/".$file;
        if(is_dir($filePath)){
            autoload($filePath);
        } else {
            include $filePath;
        }
    }
}
autoload(ROOT."/includes/functions");