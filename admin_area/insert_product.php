<!DOCTYPE html>
<?php
include("includes/db.php");
?>
<html>
    <head>
        <title>Insert Product</title>
    </head>
<body>
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align="center" width="795" border="2" bgcolor="teal">
            <tr align="center">
                <td colspan="8"><h2>Insert New Post Here</h2></td>
            </tr>
            <tr>
                <td align="right"><b>Product Title:</b></td>
                <td><input type="text" name="product" size="60" required /></td>
            </tr>
            <tr>
                <td align="right"><b>Product Category:</b></td>
                <td>
                <select name="product_cat" required>
                    <option>Select a Catergory</option>
                    <?php getCats();
                    ?>
                </td>
            </tr>       
            <tr>
                <td align="right"><b>Product Brand:</b></td>
                <td>
                <select name="product_brand" required>
                    <option>Select a Brand</option>
                    <?php getBrands();
                    ?>
                </td>
            </tr>       
            <tr>
                <td align="right"><b>Product Image:</b></td>
                <td><input type="file" name="product_image" required/></td>
            </tr>       
            <tr>
                <td align="right"><b>Product Price:</b></td>
                <td><input type="text" name="product_price" required/></td>
            </tr>       
            <tr>
                <td align="right"><b>Product Description:</b></td>
                <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
            </tr> 
            <tr>
                <td align="right"><b>Product Keyword:</b></td>
                <td><input type="text" name="product_keywords" required/></td>
            </tr>  
            <tr align="center">
                <td colspan = "7"><input type="submit" name="insert_post" value="Insert Now"/></td>
            </tr>
        </table>
</body>
</html>
<?php
    if (isset($_POST['insert_post'])){

        //getting the text data from the fields
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POSTp['product_desc'];
        $product_keywords = $_POST['product_keywords'];
        

        //getting the image from the field
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($product_image_tmp,"product_images/$product_image");

        echo $insert_product = "INSERT INTO products ";
        $prod = "(product_cat, product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ";
        $end = "('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

        $insert_pro = mysqli_query($con, $insert_product.$prod.$end);

        if($insert_pro){

            echo "<script>alert('Product Has been inserted!')</script>";
            echo "<script>window.open('index.php?insert_product','self')</script>";

        }
    }
?>