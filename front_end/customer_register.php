<!DOCTYPE html>
<?php include"in.php" ?>
<link rel="stylesheet" href="style.css" media="all" />
<html>
    <head>
        <title>My online shop</title>
    </head>
    <body>
<!-- main container start -->
        <div class="main_wrapper">

            <!-- header start -->
            <div class="header_wrapper">
                
                <a href="index.php"><img id="logo" src="../images/logo.png" /></a>
                <img id="banner" src="../images/logo.png" />

            </div>
            <!-- header end -->

            <!-- nav bar start -->
            <div class="menubar">
    
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="all_products.php">All Products</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>

                <div id="form">
                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search a Product" />
                        <input type="submit" name="search" value="Search" />
                    </form>
                </div>

            </div>
            <!-- nav bar end -->

            <!-- content wrapper start -->
            <div class="content_wrapper">


            <div id="sidebar">

                <div id="sidebar_title">Categories</div>

                <ul id="cats">

                    <?php getCats();?>

                </ul>

                <div id="sidebar_title">Brands</div>

                <ul id="cats">

                    <?php getBrands();?>

                </ul>


            </div>

            <div id="content_area">

                <div id="shopping_cart">

                    <span style="float:right; font-size:18px; padding: 5px; line-height: 40px;">
                        
                        Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price <a href="cart.php"
                        style="color:yellow">Go to Cart</a>
                    
                    </span>

                </div>

            <form action="customer_register.php" method="post" enctype="multipart/form-data">
                <table align="center" width="750">

                    <tr align="center">
                        <td colspan="6"><h2>Create an Account</h2></td>
                    </tr>
                    
                    <tr>
                        <td align="right">Customer Name:</td>
                        <td><input type="text" name="c_name" /></td>
                    </tr>

                    <tr>
                        <td align="right">Customer Email:</td>
                        <td><input type="text" name="c_email" /></td>
                    </tr>

                    <tr>
                        <td align="right">Customer Password:</td>
                        <td><input type="password" name="c_pass" /></td>
                    </tr>

                    <tr>
                        <td align="right">Customer Image:</td>
                        <td><input type="file" name="c_image" /></td>
                    </tr>

                    <tr>
                        <td align="right">Customer Country:</td>
                        <td>
                            <select name="c_country">
                                <option>Select a country</option>
                                <option>Afganistan</option>
                                <option>Japan</option>
                                <option>North Korea</option>
                                <option>India</option>
                                <option>Israel</option>
                                <option>France</option>
                                <option>China</option>
                                <option>South Africa</option>
                                <option>South Korea</option>
                                <option>North Korea</option>
                                <option>United Arab Emirates</option>
                                <option>United States</option>
                                <option>United Kingdom</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">Customer City:</td>
                        <td><input type="text" name="c_city" /></td>
                    </tr>


                    <tr>
                        <td align="right">Customer Contact:</td>
                        <td><input type="text" name="c_contact" /></td>
                    </tr>

                    <tr>
                        <td align="right">Customer Address:</td>
                        <td><input type="text" name="c_address" /></td>
                    </tr>


                <tr align="center">
                    <td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
                </tr>


                </table>
            </form>

            </div>
            <!-- content wrapper end -->

            <div id="footer">

            </div>
        </div>
<!-- main container end -->


    </body>
</html>