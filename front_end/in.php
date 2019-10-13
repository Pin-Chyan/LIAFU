<?php 
$con = mysqli_connect("localhost:3306","server01","memes","ecom");

function getCats(){
    global $con;
    $get_cats = "SELECT * FROM category";
    $run_cats = mysqli_query($con, $get_cats);
    while ($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        echo "<li><a href='#'>$cat_title</a></li>\n";
    }
}
function getBrands(){
    global $con;
    $get_cats = "SELECT * FROM brands";
    $run_cats = mysqli_query($con, $get_cats);
    while ($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['brand_id'];
        $cat_title = $row_cats['brand_title'];
        echo "<li><a href='#'>$cat_title</a></li>\n";
    }
}

?>