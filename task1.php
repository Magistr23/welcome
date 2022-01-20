<?php
$searchRoot = 'C:\xampp\htdocs\welcome\readme';
$searchName = "readme.txt";
$searchResult = [];
function search($searchRoot, $searchName, &$searchResult)
{
    $dir = scandir($searchRoot);
    if(is_array($dir)){
        foreach($dir as $value){
            if($value == "." || $value == ".."){
                continue;
            }
            if(is_dir($value . DIRECTORY_SEPARATOR . $value)){
                search($searchRoot . DIRECTORY_SEPARATOR . $value , $searchName , $searchResult);
            }elseif($value == $searchName) {
                array_push($searchResult, $searchRoot . DIRECTORY_SEPARATOR . $value);
            }
        }
    }
}
search($searchRoot, $searchName, $searchResult);
function fSize($searchResult) {
    return filesize($searchResult) !== 0;
}
print_r($searchResult);
print_r(array_filter($searchResult, "fSize"));