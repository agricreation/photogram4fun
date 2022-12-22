<?php load("_header"); ?>
<?php load("_head"); ?>
<?php load_title("Create photogram account")?>
<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $fname = $_POST["username"];
    $email = $_POST["email_address"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $error = signup($fname, $password, $email, $phone);
    $signup = true;
}
?>

<?php
    if ($signup) {
        if (!$error) {
            ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Succesfull</h1>
		<p class="lead">Now you can login from <a href="index.php">here</a>.</p>

	</div>
</main>
<?php
        } else {
            ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Fail</h1>
		<p class="lead">Something went wrong, <?=$error?>
		</p>
	</div>
</main>
<?php
        }
    } else {
        ?>

<style>
	.poppins {
		font-family: 'Poppins', sans-serif !important;
		color: rgb(121, 121, 255) !important;
	}


	.form-signin {
		max-width: 330px;
		padding: 15px;
	}

	.form-signin .form-floating:focus-within {
		z-index: 2;
	}

	.form-signin input[type="email"] {
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}

	.form-signin input[type="password"] {
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}

	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}

	.b-example-divider {
		height: 3rem;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	.b-example-vr {
		flex-shrink: 0;
		width: 1.5rem;
		height: 100vh;
	}

	.bi {
		vertical-align: -.125em;
		fill: currentColor;
	}

	.nav-scroller {
		position: relative;
		z-index: 2;
		height: 2.75rem;
		overflow-y: hidden;
	}

	.nav-scroller .nav {
		display: flex;
		flex-wrap: nowrap;
		padding-bottom: 1rem;
		margin-top: -1px;
		overflow-x: auto;
		text-align: center;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
	}
</style>

<body class="text-center">
	<main class="form-signin w-100 m-auto">
		<form method="post" action="signup.php">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="currentColor"
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
				viewBox="0 0 24 24">
				<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
				<circle cx="12" cy="13" r="4" />
			</svg>

			<h1 class="h1 mb-3 fw-normal poppins" style="font-weight: 600 !important; font-size:50px;">Photogram
			</h1>
			<h6 class="h5 mb-3 fw-normal poppins">Please create account</h6>
			<div class="form-floating">
				<input name="username" type="text" class="form-control" id="floatingInputUsername"
					placeholder="name@example.com">
				<label for="floatingInputUsername">Username</label>
			</div>

			<div class="form-floating">
				<input name="phone" type="text" class="form-control" id="floatingInputUsername"
					placeholder="name@example.com">
				<label for="floatingInputUsername">Phone</label>
			</div>
			<div class="form-floating">
				<input name="email_address" type="email" class="form-control" id="floatingInput"
					placeholder="user@example.com">
				<label for="floatingInput">Email</label>
			</div>
			<div class="form-floating">
				<input name="password" type="password" class="form-control" id="floatingPassword"
					placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
		</form>
	</main>
</body>

</html>
<?php
    }
?>