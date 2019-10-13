<?php
$host = "localhost:3307";
$s01 = new mysqli($host,"server01","memes");
if ($s01)
    echo "connected\n";
mysqli_query($s01,"DROP DATABASE ecom");
mysqli_query($s01,"CREATE DATABASE ecom");
$db = mysqli_connect($host,"server01","memes","ecom");
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
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('1','Asus')");
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('2','Razer')");
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('3','Corsair')");
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('4','Intel')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('1','Laptops')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('2','Cameras')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('3','Graphics Cards')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('4','Waifus(one per customer)')");
?>