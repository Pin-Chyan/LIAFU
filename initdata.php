<?php
$host = "localhost:3307";
$s01 = new mysqli($host,"server01","memes");
if ($s01)
    echo "connected\n";
else
    echo "error";
mysqli_query($s01,"DROP DATABASE ecom");
mysqli_query($s01,"CREATE DATABASE ecom");
$db = mysqli_connect($host,"server01","memes","ecom");
if ($db)
    echo "connected to data base\n";

$p_id = "product_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
$p_cat = "product_cat INT(100)";
$p_brand = "product_brand INT(100)";
$p_title = "product_title VARCHAR(255)";
$p_price = "product_price INT(100)";
$p_desc = "product_desc VARCHAR(200)";
$p_image = "product_image VARCHAR(100)";
$p_keywords = "product_keywords VARCHAR(200)";

$brand_id = "brand_id INT(100)";
$brand_title = "brand_title TEXT(255)";

$cat_id =           "cat_id INT(100)";
$cat_title =        "cat_title TEXT(100)";

$c_id =     "customer_id INT(100)";
$c_ip =     "customer_ip VARCHAR(255)";
$c_name =   "customer_name TEXT(100)";
$c_email =  "customer_email VARCHAR(100)";
$c_pass =   "customer_pass VARCHAR(100)";
$c_cont =	"customer_country TEXT(100)";
$c_city =	"customer_city TEXT(100)";
$c_contact ="customer_contact VARCHAR(255)";
$c_image =	"customer_image TEXT(255)";
$c_adre = "customer_address TEXT(255)";

mysqli_query($db,"CREATE TABLE customers ($c_id,$c_ip,$c_name,$c_email,$c_pass,$c_cont,$c_city,$c_contact,$c_image)");
mysqli_query($db,"CREATE TABLE products ($p_id,$p_cat,$p_brand,$p_title,$p_price,$p_desc,$p_image,$p_keywords)");
mysqli_query($db,"CREATE TABLE brands ($brand_id,$brand_title)");
mysqli_query($db,"CREATE TABLE category ($cat_id,$cat_title)");

mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('1','Asus')");
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('2','Razer')");
mysqli_query($db,"INSERT INTO brands (brand_id,brand_title) VALUES ('3','Corsair')");

mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('1','Laptops')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('2','Cameras')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('3','Graphics Cards')");
mysqli_query($db,"INSERT INTO category (cat_id,cat_title) VALUES ('4','Waifus(one per customer)')");
?>