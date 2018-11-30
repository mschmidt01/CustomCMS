<?php
/**
 * Created by PhpStorm.
 * User: Melvin
 * Date: 25.06.2017
 * Time: 12:21
 */
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.

if (file_exists('database/data.xml')) {
    $pages = simplexml_load_file('database/data.xml');

} else {
    exit('Failed to open data.xml.');
}

function readTitle($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/title");
    return (string)$result[0];
}

function readContent($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/content");
    return (string)$result[0];
}

function readLanguage($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/lang");
    return (string)$result[0];
}

function readDescription($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/description");
    return (string)$result[0];
}

function readKeywords($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/keywords");
    return (string)$result[0];
}

function readAuthor($page){
    global $pages;
    $result = $pages->xpath("//page[@name='$page']/author");
    return (string)$result[0];
}

function readNavigation(){
    global $pages;
    $dir = dirname(__FILE__);
    $navString = "<ul>";
    foreach ($pages as $page){
        $path = $page->path;
        $title = $page->title;
        $navString .=  "<li>";
        $navString .=   "<a href=\"index.php?page=$path\" onclick=\"loadContentData('".$path."');return false;\">$title</a>";
        $navString .=  "</li>";
    }
    $navString .= "</ul>";
    return $navString;
}
