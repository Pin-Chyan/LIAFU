<div>
    <form method="post" action="">
        <table width="500" align="center" bgcolor="skyblue">
            <tr align="center">
                <td colspan="4"><h2>Login to register or Buy</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Email:</b></td>
                <!-- Had to add align left to make it work -->
                <td align="left"><input type="text" name="email" placeholder="enter email"/></td>
            </tr>

            <tr>
                <td align="right"><b>Password:</b></td>
                 <!-- Had to add align left to make it work -->
                <td align="left"><input type="password" name="pass" placeholder="enter password" /></td>
            </tr>

            <tr align="center">
                <td colspan="3"><a href="checkout.php?forgot_pass">Forgot Password?</a></td>
            </tr>

            <tr align="center">
                <td colspan="4"><input type="submit" name="login" value="login" /></td>
            </tr>
        </table>
            <h2 style="float:right; padding-right:20px;"><a  style="text-decoration:none;" href="customer_register.php">New? Register Here</a>
    </form>
</div>