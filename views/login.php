<!DOCTYPE html>
<html lang="en">

    <?php include 'partials/head.php'; ?>

    <body>
        <?php include 'partials/header.php'; ?>
        <?php include 'partials/breadcrumb.php'; ?>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                             <div class="strip"></div>
                             <p>Welcome, please enter the following to continue.</p>
                             <p>If you have previously Login with us, <a href="#">Click Here</a></p>
                             <form action="/login" method="POST">
                                 <h5>User Name:</h5>
                                 <input type="text" value="">
                                 <h5>Password:</h5>
                                 <input type="password" value=""><br>
                                 <input type="submit" value="Login">

                             </form>
                            <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>New Registration</h3>
                            <div class="strip"></div>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <a href="/register" class="button">Create An Account</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->
        <?php include 'partials/footer.php'; ?>
        <?php include 'partials/scripts.php'; ?>
    </body>
</html>
