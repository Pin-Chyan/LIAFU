<?php
$host = "localhost:2140";
$s01 = new mysqli($host,"server01","memes");
if ($s01)
    echo "connected\n";
mysqli_query($s01,"DROP DATABASE testcom");
if (mysqli_query($s01,"CREATE DATABASE testcom"))
    echo "database created\n";
$db = mysqli_connect($host,"server01","memes","testcom");
if ($db)
    echo "connected to data base\n";

$p_id = "product_id INT(100)";
$p_cat = "product_cat INT(100)";
$p_brand = "product_brand INT(100)";
$p_title = "product_title VARCHAR(255)";
$p_price = "product_price INT(100)";
$p_desc = "product_desc TEXT(200)";
$p_image = "product_image TEXT(100)";
$p_keywords = "product_keywords TEXT(200)";
$brand_id = "brand_id INT(100)";
$brand_title = "brand_title TEXT(255)";
$cat_id = "cat_id INT(100)";
$cat_title = "cat_title TEXT(100)";

mysqli_query($db,"CREATE TABLE products ($p_id,$p_cat,$p_brand,$p_title,$p_price,$p_desc,$p_image,$p_keywords)");
mysqli_query($db,"CREATE TABLE brands ($brand_id,$brand_title)");
mysqli_query($db,"CREATE TABLE category ($cat_id,$cat_title)");
?>