<?php
/**
 * Created by PhpStorm.
 * User: Melvin
 * Date: 01.06.2017
 * Time: 16:24
 */
include_once "databaseHandler.php";
global $frontArray;
getTitle();
getContent();
getNavigation();
getLanguage();
getDescription();
getAuthor();
getKeywords();

if (isset($_GET['ajax']) && !empty($_GET['ajax'])) {
    echo json_encode($frontArray);
}

function getTitle()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["title"] = readTitle($title);
}

function getContent()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["content"] = readContent($title);
}

function getNavigation()
{
    return readNavigation();
}

function getLanguage()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["lang"] = readLanguage($title);
}

function getDescription()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["description"] = readDescription($title);
}

function getAuthor()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["author"] = readAuthor($title);
}


function getKeywords()
{
    global $frontArray;
    $title = "home";
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $title = $_GET['page'];
    }
    $frontArray["keywords"] = readKeywords($title);
}