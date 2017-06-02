<!DOCTYPE html>
<html lang="en">

    <?php include 'partials/head.php'; ?>

    <body>

        <?php include 'partials/header.php'; ?>
        <?php include 'partials/breadcrumb.php'; ?>

        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Register Now</h3>
				<p>Welcome, please enter the following details to continue.</p>
				<p>If you have previously registered with us, <a href="#">click here</a></p>
				 <form>
					<ul>
						<li class="text-info">First Name: </li>
						<li><input type="text" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Last Name: </li>
						<li><input type="text" value=""></li>
					 </ul>
					<ul>
						<li class="text-info">Email: </li>
						<li><input type="text" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Password: </li>
						<li><input type="password" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Re-enter Password:</li>
						<li><input type="password" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Mobile Number:</li>
						<li><input type="text" value=""></li>
					</ul>
					<input type="submit" value="Register Now">
					<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
				</form>
			</div>
		</div>
	</div>

        <?php include 'partials/footer.php'; ?>
        <?php include 'partials/scripts.php'; ?>

    </body>
</html>
