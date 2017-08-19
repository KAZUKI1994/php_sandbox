<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 17:59
 */
$zip_path = './Archive.zip';
$unzip_dir = '.';
$file_mod = 0755;

$zip = new ZipArchive();
if($zip->open($zip_path) !== true) {
    echo "ファイルが見当たらへんで";
    return false;
}

$unzip_dir = (substr($unzip_dir, -1) == '/') ? $unzip_dir : $unzip_dir.'/';
for($i = 0; $i < $zip->numFiles; $i++){
    if(file_exists($unzip_dir.$zip->getNameIndex($i))){
        @unlink($unzip_dir.$zip->getNameIndex($i));
    }
}

if($zip->extractTo($unzip_dir) !== true){
    $zip->close();
    echo "解凍失敗";
    return false;
}

$files = [];
for($i = 0; $i < $zip->numFiles; $i++){
    $files[] = $zip->getNameIndex($i);
    if(file_exists($unzip_dir.$zip->getNameIndex($i))){
        chmod($unzip_dir.$zip->getNameIndex($i), $file_mod);
    }
}
$zip->close();
var_dump($files);
