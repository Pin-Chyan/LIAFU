<!DOCTYPE html>
<?php include"in.php" ?>
<link rel="stylesheet" href="./styles/style.css" media="all" />
<html>
    <head>
        <title>My online shop</title>
    </head>
    <body>
<!-- main container start -->
        <div class="main_wrapper">

            <!-- header start -->
            <div class="header_wrapper">
                
                <a href="index.php"><img id="logo" src="./images/logo.png" /></a>
                <img id="banner" src="./images/logo.png" />

            </div>
            <!-- header end -->

            <!-- nav bar start -->
            <div class="menubar">
    
                <ul id="menu">

                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../all_products.php">All Products</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                    <li><a href="../#">Sign Up</a></li>
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../#">Contact</a></li>

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
                <?php
                    $user = $_SESSION['customer_email'];
                    $get_img = "select * from customers where customer_email = '$user'";
                    $run_img = mysqli_query($con,$get_img);
                    $row_img = mysqli_fetch_array($array);
                    $c_image = $row_img['customer_image'];
                    $c_name  = $row_img['customer_name'];
                    echo "<p style = 'text-align:center;'><img src='customer_image/$c_image' width = '150' height = '150' /></p>";
                ?>
                <li><a href = "my_account.php?my_orders">My Orders</a></li>
                <li><a href = "my_account.php?edit_account">Edit Account</a></li>
                <li><a href = "my_account.php?change_pass">Change Password</a></li>
                <li><a href = "my_account.php?delete_account">Delete Account</a></li>

                </ul>
            </div>

            <div id="content_area">

				<?php	cart(); ?>

             <div id="shopping_cart">

                    <span style="float:right; font-size:18px; padding: 5px; line-height: 40px;">
					<?php
					if(isset($_SESSION['customer_email']))
					{
						echo "<b>Welcome:</b>" . $_SESSION['customer_email'];
					}
					?>

					<?php
					if(isset($_SESSION['customer_email']))
					{
						echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					}
					else
					{
						echo "<a href='checkout.php' style='color:orange;'>Logout</a>";
					}
					?>
                    </span>

            </div>

                <div id="products_box">
                    <h2 style = "padding:20px; color:black ">Welcome: <?php echo $c_name; ?></h2><br>

                    <?php

                        if (!isset($_GET['my_orders']) && !isset($_GET['edit_account']) && !isset($_GET['change_pass']) && !isset($_GET['delete_account']))
                        {
                            echo "<b>You can see your orders' progress by clicking this <a href=\"my_account.php?my_orders\">link</a>.</b>";
                        }
                        if(isset($_GET['my_orders']))
                        {
                            include("my_orders.php");
                        }
                    ?>
                </div>

            </div>
            <!-- content wrapper end -->

            <div id="footer">

            </div>
        </div>
<!-- main container end -->


    </body>
</html>