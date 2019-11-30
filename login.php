<?php 
    require('./head.php');

    redirectLoggedInUsers();
    
    // set current page to login
    $_SESSION['current_page'] = 'login';
?>
<!-- MAIN -->
<main role="main" class="inner cover">
    <h1 class="cover-heading">Login page.</h1>
    <form method="POST" action="<?php echo URLROOT; ?>login_process.php" class="form-signin">
        <!-- Username -->
        <div class="form-group">
            <label for="id_username" class="sr-only">User Name:</label>
            <input type="text" name="un" id="id_username" class="form-control" placeholder="User Name" required autofocus>
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="id_password" class="sr-only">Password:</label>
            <input type="password" name="p" id="id_password" class="form-control" placeholder="Password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <!-- not a member register -->
    <p>Not a member ? <a href="<?php echo URLROOT; ?>register.php">Register</a></p>
</main>

<?php require('./footer.php'); ?>