<?php include('navbar.php'); ?>

<form action="./script.php" method="post" class="m-5">
    <h1 class="text-center">Admin Login</h1>

    <div class="form-group">
        <label class="form-label fw-bold">Username</label>
        <input type="text" name="username" placeholder="Enter your name.."class="form-control" required autocomplete="off">
    </div>

    <div class="form-group">
        <label for="password" class="form-label fw-bold">Password </label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password.."required autocomplete="off">
    </div>

    <input type="submit" name="login" value="Login"class="btn btn-danger m-2">
</form>

<?php include('footer.php'); ?>